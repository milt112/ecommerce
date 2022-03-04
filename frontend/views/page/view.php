<?php
/**
 * @var yii\web\View $this
 * @var common\models\Page $model
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\bootstrap4\ActiveForm;
use trntv\filekit\widget\Upload;

$this->title = $model->title;
?>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'eventImage')->widget(
        Upload::class,
        [
            'url' => ['images']
        ]
)?>

<h1 class="mt-4"><?php echo Html::encode($model->title) ?></h1>
<?php echo HtmlPurifier::process($model->body) 
?>