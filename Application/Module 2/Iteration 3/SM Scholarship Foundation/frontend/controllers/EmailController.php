<?php

namespace frontend\controllers;

use Yii;
use common\models\Email;
use common\models\EmailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\User;
use common\models\Scholar;
use yii\swiftmailer\Mailer;

/**
 * EmailController implements the CRUD actions for Email model.
 */
class EmailController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Email models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Email model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Email model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
	
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
        $model = new Email();
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					
					$model->email_scholar_id=$scholar->scholar_id;
					if ($model->load(Yii::$app->request->post())) {
 								$to = "root@localhost.com"; 
								$subject = $model->subject; 
								$body = $model->content."\nfrom:".$scholar->scholar_contact_email .PHP_EOL;			
								$headers = "from: root@localhost";  
								if (mail($to, $subject, $body, $headers)) 
								{
								\Yii::$app->getSession()->setFlash('error', 'The message is delivered');
					
								} else { 
								\Yii::$app->getSession()->setFlash('error', 'Message failed');	
								}								
							
					return $this->redirect(['create', 'id' => $model->email_id]);
					} else {
						return $this->render('create', [
						'model' => $model,
						]);
					}
					
			
				}
			}
		}
		
    }
	 public function actionCreate2()
    {
	
		$username=Yii::$app->user->identity->username;
		$users = User::find()->all();
		$scholars = Scholar::find()->all();
        $model2 = new Email();
		foreach($users as $user){
			foreach($scholars as $scholar){
				if($user->username==$username&&$user->id==$scholar->scholar_user_id){
					
					$model2->email_scholar_id=$scholar->scholar_id;
					$model2->subject="Low/Fail Grade";
					if ($model->load(Yii::$app->request->post())) {
 								$to = "root@localhost.com"; 
								$subject = "Low/Fail Grade"; 
								$body = $model2->content."\nfrom:".$scholar->scholar_contact_email .PHP_EOL;			
								$headers = "from: root@localhost";  
								if (mail($to, $subject, $body, $headers)) 
								{
								\Yii::$app->getSession()->setFlash('error', 'The message is delivered');
					
								} else { 
								\Yii::$app->getSession()->setFlash('error', 'Message failed');	
								}								
							
					return $this->redirect(['create2', 'id' => $model2->email_id]);
					} else {
						return $this->render('create2', [
						'model2' => $model2,
						]);
					}
					
			
				}
			}
		}
		
    }

    /**
     * Updates an existing Email model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->email_scholar_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Email model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Email model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Email the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Email::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }	
}
