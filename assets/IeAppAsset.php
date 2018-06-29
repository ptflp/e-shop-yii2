<?php

namespace app\assets;

use yii\web\AssetBundle;

class IeAppAsset  extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        // 'js/jquery.js',
        // 'js/bootstrap.min.js',
        'js/html5shiv.js',
        'js/respond.min.js',
    ];
    public $jsOptions = [
    	'condition' => 'lt IE 9',
    	'position'=> \yii\web\View::POS_HEAD
    ];
}

 ?>