<?php

use yii\helpers\Html;

?>

<div class="comment-view well">
    <p><?php echo $model->text; ?></p>
    <p><small class="pull-left">Posted By: <?= $model->author ?> On <?= date('Y-m-d H:i', $model->created) ?></small></p>
</div>