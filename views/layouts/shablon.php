<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<? $this->beginBody();?>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <h2>New Shablon</h2>
    </div>
        <div class="row">
            <?=$content;?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>Yangi shablon</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>