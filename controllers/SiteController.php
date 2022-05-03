<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RegForm;
use app\models\Tovar;
use app\models\Category;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionMy()
    {
        $ism="Bahrom Islomov";
        $sonlar=array(12,3454,34,56,78,89);
        return $this->render("page",["ism"=>$ism,"sonlar"=>$sonlar]);
    }
    public function actionYangi()
    {
        $a=new RegForm();
        return $this->render("form2",["soz"=>$a]);
    }
    public function actionTovar()
    {
        $h=new Category();
        $h->cnomi="Sport";
        $h->save();
//        $b=new Tovar();
//        if($b->load(Yii::$app->request->post()))
//        {
//            $b->save();
//            $this->redirect("/");
//        }
//
////        $b->nomi="Ruchka";
////        $b->narx=5000;
////        $b->malumot="Qizil ruchka";
////        $b->save();
//        return $this->render("add",["tovar"=>$b]);
    }
    public function actionRoyhat()
    {
      $g=Tovar::find();
      $sahifa=new Pagination(['totalCount'=>$g->count(),'defaultPageSize'=>4]);
      $test=$g->offset($sahifa->offset)->limit($sahifa->limit)->all();
        return $this->render("tovarlar",["tovarlar"=>$test,"sahifa"=>$sahifa]);
    }
    public function actionYangi3()
    {
        $g=new Tovar();
        $g->nomi="choynak";
        $g->narx=10000;
        $g->malumot="oq";
        $g->vaqt=date("Y-m-d H:i:s");
        $g->save();
    }
    public function actionView($id)
    {
        $tovar=Tovar::findOne($id);
        return $this->render("tov",["tovar"=>$tovar]);
    }
    public function actionOchirish($id)
    {
        $t=Tovar::findOne();
        $t->delete();
    }
    public function actionCats()
    {
        $cats=Category::find()->all();
        return $this->render("cate",["cats"=>$cats]);
    }



}
