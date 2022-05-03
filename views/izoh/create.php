<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izoh */

$this->title = 'Create Izoh';
$this->params['breadcrumbs'][] = ['label' => 'Izohs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izoh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
