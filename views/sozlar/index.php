<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SozlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sozlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sozlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sozlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sarlavha',
            'matn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
