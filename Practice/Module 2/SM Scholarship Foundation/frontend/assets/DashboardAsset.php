<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/agency.css',
		'css/abootstrap.min.css',
		'//fonts.googleapis.com/css?family=Montserrat:400,700',
		'//fonts.googleapis.com/css?family=Kaushan+Script',
    '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
    '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
        'css/site.css',
		'css/bootstrap.min.css',
		'//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
		'//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
		'css/AdminLTE.min.css',
		'css/skins/_all-skins.min.css',
		'plugins/iCheck/flat/blue.css',
    ];
    public $js = [
	
		//'js/jquery.js',
		'js/bootstrap.min.js',
		'js/classie.js',
		'js/cbpAnimatedHeader.js',
		'js/jqBootstrapValidation.js',
		//'js/contact_me.js',
		'js/agency.js',
		'//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js',
		
    
	];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
