
<div class="row">
    <table class="table table-bordered table-hover">
<?php
use yii\helpers\Url;
foreach($tovarlar as $tovar)
{
    echo "<tr><td><a href='";
    echo Url::to(["site/about","id"=>$tovar->id]);
    echo".'>".$tovar->nomi."</a></td>";
    echo "<td>".$tovar->narx."</td>";
    echo "<td>".$tovar->malumot."</td></tr>";
}

?>
    </table>
    <?
    echo \yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
        'maxButtonCount'=>3,
    ]);
    ?>
</div>
