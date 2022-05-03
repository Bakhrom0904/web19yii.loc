<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IzohSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Izohs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izoh-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Izoh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fish',
            'izoh_matn',
            'sozlar_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
