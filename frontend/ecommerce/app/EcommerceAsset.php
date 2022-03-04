<?php
namespace frontend\ecommerce\app;

use common\assets\Html5shiv;
use rmrevin\yii\fontawesome\NpmFreeAssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class EcommerceAsset extends AssetBundle {
    public $sourcePath = '@frontend/ecommerce/app/assets';
    public $css = [
        'css/bootstrap.css'
    ];
    public $js = [];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
        NpmFreeAssetBundle::class,
    ];
}