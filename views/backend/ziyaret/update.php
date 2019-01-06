<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ziyaret */

$this->title = 'Update Ziyaret: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Ziyarets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>

<style>
.site-index{
    background: linear-gradient(to right, #F7F8F8, #ACBB78);
}
</style>

<div class="site-index">
<div class="ziyaret-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>