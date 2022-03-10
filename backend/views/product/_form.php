<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Product $model
 * @var yii\bootstrap4\ActiveForm $form
 */
?>

<div class="product-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-body">
                <?= $form->errorSummary($model); ?>

                <?= $form->field($model, 'category_id')->textInput() ?>
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'price')->textInput() ?>
                <?= $form->field($model, 'hinhanh[]')->fileInput(['multiple' => 'multiple'])?>
                <?= $form->field($model, 'created_by')->textInput() ?>
                <?= $form->field($model, 'created_at')->textInput() ?>
                <?= $form->field($model, 'updated_by')->textInput() ?>
                <?= $form->field($model, 'updated_at')->textInput() ?>
                
            </div>
            <div class="card-footer">
                <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
