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
    public $baseUrl = '@web/frontend-files/';
    public $css = [
      "img/favicons/apple-icon-57x57.png",
      "img/favicons/apple-icon-60x60.png",
      "img/favicons/apple-icon-72x72.png",
      "img/favicons/apple-icon-76x76.png",
       "img/favicons/apple-icon-114x114.png",
       "img/favicons/apple-icon-120x120.png",
       "img/favicons/apple-icon-144x144.png",
       "img/favicons/apple-icon-152x152.png",
       "img/favicons/apple-icon-180x180.png",
        "img/favicons/android-icon-192x192.png",
        "img/favicons/favicon-32x32.png",
        "img/favicons/favicon-96x96.png",
        "img/favicons/favicon-16x16.png",
        "img/favicons/manifest.json",
        "https://fonts.googleapis.com/",
        "https://fonts.gstatic.com/",
      "https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&amp;family=Playfair+Display:wght@400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap",
      "css/app.min.css",
     "css/fontawesome.min.css",
     "css/style.css",

        ];
    public $js = [
         "js/vendor/jquery-3.6.0.min.js",
         "js/app.min.js",
         "js/main.js",
        "js/form.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
