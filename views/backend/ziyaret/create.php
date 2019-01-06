<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ziyaret */

$this->title = 'Ziyaret icin Manuel Satir Ekleyin';
$this->params['breadcrumbs'][] = ['label' => 'Ziyarets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
.site-index{
    background: linear-gradient(to right, #00C9FF, #92FE9D);
}
</style>


<div class="site-index">
<div class="ziyaret-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>