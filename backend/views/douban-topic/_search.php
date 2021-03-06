<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\DoubanTopicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="douban-topic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'topicId') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'lastResponse') ?>

    <?= $form->field($model, 'mTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
