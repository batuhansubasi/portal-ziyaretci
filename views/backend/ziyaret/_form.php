<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ziyaret */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
.site-index{
    background: linear-gradient(to right, #334d50, #cbcaa5);
}
</style>

<div class="site-index">
	<div class="ziyaret-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IP')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Giris_Zamani')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

	</div>
</div>