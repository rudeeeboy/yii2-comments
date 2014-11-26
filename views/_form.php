<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="comment-form">
    <?php $form = ActiveForm::begin(); ?>
    
        <?= $form->field($model, 'comment')->textarea(['rows' => 2]); ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Add') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>