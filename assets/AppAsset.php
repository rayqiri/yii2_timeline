<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/reset.css',
        'css/reset2.css',
        'css/radios-to-slider.css',
        'css/example.css',
        'css/style.css',
        'css/radio.css',
    ];
    public $js = [
        'js/modernizr.js',
        'js/jquery.mobile.custom.min.js',
        'js/main.js',
        'js/ajax-modal-popup.js',
        'js/Myscript.js',
        'js/modal.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
