<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form=ActiveForm::begin(['options'=>['class'=>'form-horizontal']]);
echo $form->field($tovar,"nomi");
echo $form->field($tovar,"narx");
echo $form->field($tovar,"malumot")->textarea();
echo Html::submitButton("Jo`natish");
ActiveForm::end();

?>
