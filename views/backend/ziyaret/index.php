<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ZiyaretSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ziyarets';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
.site-index{
    background: linear-gradient(to right, #ADA996,#F2F2F2, #DBDBDB,#EAEAEA);
}
</style>

<div class="site-index">
<div class="ziyaret-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ziyaret', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'IP:ntext',
            'Giris_Zamani',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>