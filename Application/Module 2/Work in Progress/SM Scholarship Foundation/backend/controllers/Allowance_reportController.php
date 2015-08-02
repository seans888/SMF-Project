<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class Allowance_reportController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
