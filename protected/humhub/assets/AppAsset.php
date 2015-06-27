<?php

namespace humhub\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/datepicker.css',
        'css/style.css',
        'css/temp.css',
        'resources/font-awesome/css/font-awesome.min.css',
        'css/bootstrap-wysihtml5.css',
        'css/flatelements.css',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_BEGIN];
    public $js = [
        'js/bootstrap.min.js',
        'js/ekko-lightbox-modified.js',
        'js/modernizr.js',
        'js/jquery.cookie.js',
        'js/jquery.highlight.min.js',
        'js/jquery.autosize.min.js',
        'js/jquery.timeago.js',
        'js/jquery.knob.min.js',
        'js/wysihtml5-0.3.0.js',
        'js/bootstrap3-wysihtml5.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.placeholder.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.iframe-transport.js',
        'js/jquery.ui.widget.js',
        'js/jquery.fileupload.js',
        'js/jquery.color-2.1.0.min.js',
        'js/jquery.flatelements.js',
        'js/desktop-notify-min.js',
        'js/desktop-notify-config.js',
        'js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}