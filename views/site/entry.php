<?php

?>

<?php $form = \yii\widgets\ActiveForm::begin();?>
<?= $form->field($model,'name')?>
<?= $form->field($model,'email')?>

<div class="form-group">
    <?= \yii\helpers\Html::submitButton('Отправить',['class'=>'btn btn-primary'])?>
</div>

<?php \yii\widgets\ActiveForm::end();?>