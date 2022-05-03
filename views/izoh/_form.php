<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izoh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izoh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'izoh_matn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sozlar_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
