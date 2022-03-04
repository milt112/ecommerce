<?php
use yii\bootstrap4\ActiveForm;
use League\Glide\Manipulators\Size;
use yii\helpers\Html;

$this->title = "Cart"
?>
<h1><?= $this->title ?></h1>
<?php $form = ActiveForm::begin() ?>
<?php if (!empty(Yii::$app->session['cart'])) { ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Product name</th>
                    <th>Amount</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(Yii::$app->session['cart'] as $id => $qty) {
                    $product = $this->context->findProduct($id);
                    ?>
                <tr>
                    <td><?= $product->name ?></td>
                    <td><?= Html::textInput($id, $qty, ['class' => 'form-control', 'size' => 1, 'maxlength' => 2]) ?></td>
                    <td><?=number_format($product->price * $qty, 2) ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td></td>
                    <td><?=$totalItems ?></td>
                    <td><?=number_format($totalPrice, 2) ?>$</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <?=Html::a('Continue', ['/site/index'], ['class' => 'btn btn-info']) ?>
        </div>
        <div class="col-sm-6 text-right">
            <?=Html::submitButton('Update Cart', ['class' => 'btn btn-warning']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
<?php } ?>


