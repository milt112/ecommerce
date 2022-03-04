<?php
use yii\helpers\Html;
use yii\bootstrap4\Tabs;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['/shop']];
$this->params['breadcrumbs'][] = ['label' => 'Product', 'url' => ['/shop']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-md-6">
        <?= Html::img(Yii::getAlias('@web').'/uploads/products/shin.jpg', 
        ['width' => '600px', 'height' => '430px']) ?>

    </div>
    <div class="col-md-6">
        <h1> <?= $this->title ?> </h1>
        <h2><?= Html::encode($model->price) ?></h2> 
        <?=  HtmlPurifier::process($model->description) ?>
        <hr>

        <?=Html::a('Add to Cart', ['/shop/cart/add', 'id' => $model->id], ['class' => 'btn btn-lg btn-success']) ?>
        <?=Tabs::widget([
            'items' => [
                [
                    'label' => 'Description',
                    'content' => HtmlPurifier::process($model->description),
                    'active' => true
                ],
                [
                    'label' => 'Review',
                    'content' => 'Review...',
                    'options' => ['id' => 'myveryownID'],
                ],
            ],
        ]); ?>
    </div>
</div>
<hr>
<div class="text-center">
    <h1>Related product</h1>
    <div class="container">
        <div class="row">
            <?= ListView::widget([
                'dataProvider' => $related_product,
                'summary' => false,
                'itemView' => '_product',

            ]) ?>
        </div>
    </div>
</div>