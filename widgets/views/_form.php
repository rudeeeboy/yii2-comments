<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<h2>Leave a Comment</h2>
<div class="comment-form">
    <?php $form = ActiveForm::begin(); ?>
    
        <?= $form->field($model, 'author')->textInput(); ?>
        <?= $form->field($model, 'email')->textInput(); ?>
        <?= $form->field($model, 'website')->textInput(); ?>
        <?= $form->field($model, 'text')->textarea(['rows' => 2]); ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Add') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>