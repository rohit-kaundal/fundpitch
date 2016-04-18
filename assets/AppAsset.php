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
   
   /*
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    */
   
    
    public $sourcePath = '@app/themes/adminlte';
    public $css = [
        'js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css',
        'css/font-icons/entypo/css/entypo.css',
        'css/bootstrap.css',
        'css/neon.css',
        'css/neon-core.css',
        'css/neon-theme.css',
        'css/neon-forms.css',
        'css/custom.css',
        'js/datatables/datatables.css',
        'js/select2/select2-bootstrap.css',
        'js/select2/select2.css',
        
        'js/jvectormap/jquery-jvectormap-1.2.2.css',
        'js/rickshaw/rickshaw.min.css',
        'css/font-icons/font-awesome/css/font-awesome.min.css',
        'css/home.css',
        'css/home-extra.css'
        
        ];
        
    public $js = [
        'js/jquery-1.11.3.min.js',
        'js/gsap/TweenMax.min.js',
        'js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
        'js/bootstrap.js',
        'js/joinable.js',
        'js/resizeable.js',
        'js/neon-api.js',
        
        'js/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'js/jvectormap/jquery-jvectormap-europe-merc-en.js',
        'js/jquery.sparkline.min.js',
        'js/rickshaw/vendor/d3.v3.js',
        'js/rickshaw/rickshaw.min.js',
        'js/raphael-min.js',
        'js/morris.min.js',
        'js/toastr.js',
        'js/neon-chat.js',
        'js/datatables/datatables.js',
        'js/select2/select2.min.js',
        'js/neon-custom.js',
        'js/neon-demo.js',
        'js/neon-login.js',
        'js/jquery.validate.min.js',
        
        
        
        ];
        
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    
}
