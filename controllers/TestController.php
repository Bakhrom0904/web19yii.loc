<?php

namespace app\controllers;

use app\models\FikrForm;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;
use yii\base\Security;

class TestController extends Controller
{
    public $layout="shablon";
    public function actionIndex()
    {
//        $a=new Security();
//        echo $a->generateRandomString(4);
        return $this->render("sayt");
    }
    public function actionContact()
    {
       $f=new FikrForm();
        if($f->load(Yii::$app->request->post()))
        {
            $f->foto = UploadedFile::getInstances($f, 'foto');
            foreach($f->foto as $rasm):
               $rasm->saveAs("photos/".$rasm->foto->baseName.".".$rasm->foto->extension);
             endforeach;
            $this->redirect("/web");

        }
        return $this->render("contact",["f"=>$f]);
    }
    public function actionFoyda()
    {
        return $this->render("foyda");
    }

}