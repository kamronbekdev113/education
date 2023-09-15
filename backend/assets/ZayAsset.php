<?php

namespace backend\assets;

use yii\web\AssetBundle;

class ZayAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'zay/css/bootstrap.min.css',
        'zay/css/custom.css',
        'zay/css/templatemo.css',
        'zay/css/fontawesome.min.css'
    ];
    public $js = [
        'zay/js/jquery-1.11.0.min.js',
        'zay/js/jquery-migrate-1.2.1.min.js',
        'zay/js/bootstrap.bundle.min.js',
        'zay/js/templatemo.js',
        'zay/js/custom.js',
    ];
}