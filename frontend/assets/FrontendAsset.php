<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use common\assets\Html5shiv;
use rmrevin\yii\fontawesome\NpmFreeAssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@frontend/web/bundle';

    /**
     * @var array
     */
    public $css = [
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css',
        '/css/main.css',
        '/css/index.css'
    ];

    /**
     * @var array
     */
    public $js = [
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
        '/js/scripts.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
        NpmFreeAssetBundle::class,
    ];
}
