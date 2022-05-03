<div class="row">
<div class="col-md-4">
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$form=ActiveForm::begin(['options'=>['class'=>'form-horizontal','enctype' => 'multipart/form-data']]);
echo $form->field($f,"sarlavha");
echo $form->field($f,"foto[]")->fileInput(['multiple'=>true]);
echo $form->field($f,"ism")->label("Bahrom")->dropDownList(['ay'=>'ayol','er'=>'erkak'],['prompt'=>"Jinsni tanlang"]);
echo $form->field($f,"matn");
echo Html::submitButton();
ActiveForm::end();
//echo "<pre>";
//print_r($f);
//echo "</pre>";
?>
</div>
</div>
