<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izoh */

$this->title = 'Update Izoh: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Izohs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izoh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
