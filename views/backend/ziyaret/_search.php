<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ZiyaretSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
.site-index{
    background: linear-gradient(to right, #ee9ca7, #ffdde1);
}
</style>

<div class="site-index">
<div class="ziyaret-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'IP') ?>

    <?= $form->field($model, 'Giris_Zamani') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
