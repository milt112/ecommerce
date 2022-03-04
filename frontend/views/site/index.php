<?php
use yii\bootstrap4\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;
/**
 * @var yii\web\View $this
 */
$this->title = Yii::$app->name;
?>

<div class="jumbotron">

</div>

<div class="row">
    <div class="col-md-9">
        <h1>New Product</h1>
        <div class="row">
            <?= ListView::widget([
                'dataProvider' => $dataProviderProduct,
                'summary' => false,
                'itemView' => '_product',
            ]) ?>
        </div>
    </div>
    
    <div class="col-md-3">
        Right menu
    </div>
</div>
