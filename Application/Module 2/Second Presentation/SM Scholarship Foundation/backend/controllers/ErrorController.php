<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class ErrorController extends Controller
{
    public function actionError()
    {
        return $this->render('error');
    }
	
    public function actionError2()
    {
        return $this->render('error2');
    }
}
