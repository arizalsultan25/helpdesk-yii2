<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',

        //mondy css req
        'mondy/css/bootstrap.min.css',
        'mondy/css/font-awesome.css',
        'mondy/css/magnific-popup.css',
        'mondy/css/slicknav.css',
        'mondy/css/style.css',

        //faq accordion css
        'css/faq-accordion.css',

    ];
    public $js = [
        //mondy js req
        'mondy/js/bootstrap.min.js',
        'mondy/js/jquery.magnific-popup.min.js',
        'mondy/js/jquery.slicknav.min.js',
        'mondy/js/jquery-3.2.1.min.js',
        'mondy/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
