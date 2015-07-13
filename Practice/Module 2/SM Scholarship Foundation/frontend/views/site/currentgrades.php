<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\jui\Tabs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GradeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Current Grades';
$this->params['breadcrumbs'][] = $this->title;
echo '<html>
<head>
</head>
<body>
<h1>Name: </h1>
<h2>School Year: </h2>
<h2>Term: </h2>
<h2>Grade Value(GPA/GWA): </h2>
<h2>Grade Sheet: </h2>
</body>
</html>';
?>

