<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form=ActiveForm::begin(['options'=>['class'=>'form-horizontal']]);
echo $form->field($soz,"login");
echo $form->field($soz,"ism")->input("date");
echo $form->field($soz,"parol")->passwordInput();
echo Html::submitButton();
ActiveForm::end();

?>
