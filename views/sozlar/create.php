<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sozlar */

$this->title = 'Create Sozlar';
$this->params['breadcrumbs'][] = ['label' => 'Sozlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sozlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
