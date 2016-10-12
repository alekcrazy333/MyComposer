<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

<?=$form->field($model,'name')?>
<?=$form->field($model,'email')?>
<?php echo Html::submitButton('Отправить') ?> <!-- два варианта вывода полей на форму через = либо echo -->

<?php ActiveForm::end() ?>
