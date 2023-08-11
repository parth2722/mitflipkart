<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/responsive.css',
        'css/style.css',
        'css/site.css',

    ];
    public $js = [
        'js/bootstrap.js',
        'js/custom.js',
        'js/jquery-3.4.1.min.js',
        'js/ajax.js',

        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
