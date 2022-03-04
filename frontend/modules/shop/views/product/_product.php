<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>

<div class="col-sm-3">
  <div class="card h-100">
    <!-- Product image-->
    <img class="card-img-top" src="<?= Yii::$app->request->baseUrl ?>/uploads/products/sun.png" alt="..." />
    <div class="card-body text-center p-4">
        <!-- Product name--><h5 class="card-title"><?= HtmlPurifier::process($model->name)?></h5>
        <?= Html::encode($model->description) ?>
        <br>
        <?= Html::encode($model->price) ?>$
    </div>
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center"><?= Html::a('Add to cart', ['/shop/cart/add', 'id' => $model->id] ,['class' => 'btn btn-outline-dark mt-auto']) ?> 
        <?= Html::a('View', ['/shop/product/detail', 'id' => $model->id] ,['class' => 'btn btn-outline-dark mt-auto']) ?> 
        </div>
    </div>  
  </div>

</div>