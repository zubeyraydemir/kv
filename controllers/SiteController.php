<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\imagine\Image;
use Imagine\Image\Box;

class SiteController extends Controller
{ 
    /**
     * @inheritdoc
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
     * @inheritdoc
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
    
    public function actionVilla()
    {
        $name = Yii::$app->getRequest()->getQueryParam('name');
        $model = ["name"=>$name];
        return $this->render('villa', [ "model" => $model]);
    }
    
    public function actionList()
    {
        $name = Yii::$app->request->get('n');
        $start = Yii::$app->request->get('sd');
        $end = Yii::$app->request->get('ed');
        $adult = Yii::$app->request->get('a');
        $child = Yii::$app->request->get('c');
        $posts = Yii::$app->db->createCommand('SELECT * FROM estates')->queryAll();

        $model = [
            "name"=>$name,
            "start"=>$start,
            "end"=>$end,
            "adult"=>$adult,
            "child"=>$child,
            "villas"=>$posts
        ];
        return $this->render('list', [ "model" => $model]);
    }
    
    public function actionSex()
    {
        ini_set('max_execution_time', 30000);
        ini_set('memory_limit', '1024M');
        $files = scandir("C:\\wamp64\\www\\kv\\web\\images\\villa\\");
        foreach ($files as $file)
        {
            if (strpos($file, '.jpg') !== false) {
                echo $file."<br>";
                $img = $imagine = Image::getImagine()
                ->open("C:\\wamp64\\www\\kv\\web\\images\\villa\\$file");

                
                $img->thumbnail(new Box(723, 407))
                ->save("C:\\wamp64\\www\\kv\\web\\images\\villa\\b\\$file", ['quality' => 90]);

                $img->thumbnail(new Box(360, 271))
                ->save("C:\\wamp64\\www\\kv\\web\\images\\villa\\t\\$file", ['quality' => 60]);
            }
        }
        return "";


       /* $path = Yii::$app->basePath."/images/villa/begonvil-01.JPG";
        $images_path = realpath(Yii::$app->basePath . '/../images');
        return  $images_path;
*/
        $file = fopen("C:\\wamp64\\www\\kv\\web\\images\\villa\\begonvil-01.JPG", "r");
        $thumb = resize_image($file, 100, 100);
        /*
        ->thumbnail(new Box(100, 100))
        ->save("@web/images/villa/thumbnail/begonvil-01.JPG", ['quality' => 50]);*/
    }

    function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        if ($w/$h > $r) {
            $newwidth = $h*$r;
            $newheight = $h;
        } else {
            $newheight = $w/$r;
            $newwidth = $w;
        }
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
}

    /**
     * Login action.
     *
     * @return string
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
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
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
}
