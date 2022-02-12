<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Posts */
/* @var $form ActiveForm */
?>
<div class="posts-create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'posted_by') ?>
        <?= $form->field($model, 'title') ?>
        <?= $form->field($model, 'body') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'slug') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'created_at') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- posts-create -->
