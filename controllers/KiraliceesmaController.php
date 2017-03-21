<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\helpers\Url;
use yii\web\UploadedFile;
use yii\imagine\Image;
use Imagine\Image\Box;

class KiraliceesmaController extends Controller
{
    public $layout = 'admin';
    /**
     * @inheritdoc
     */
	public function behaviors() 
    {
         return [
            'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                   'actions' => ['login', 'error'],
                   'allow' => true,
                ],
                [
                   'allow' => true,
                   'roles' => ['@'],
                ],
             ],
         ]];
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
		$estates = Yii::$app->db->createCommand('SELECT name FROM estates')->queryAll();
		//$data = json_encode($estates);
        return $this->render('index', [
            'estates' => $estates,
        ]);

        return $this->render('index');
    }

    public function slugify($text)
    {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
    }

    public function actionVilla()
    {
        $name = Yii::$app->getRequest()->getQueryParam('name');
        $params = [':name' => $name];
        $villa = Yii::$app->db->createCommand('SELECT * FROM estates where name = :name')
        ->bindValues($params)
           ->queryOne();
        $reserves = Yii::$app->db->createCommand('SELECT * FROM reservations where villa_id = :id')
        ->bindValues([":id" => $villa["id"]])
           ->queryAll();
        $prices = Yii::$app->db->createCommand('SELECT * FROM prices where villa_id = :id order by start_date,end_date')
        ->bindValues([":id" => $villa["id"]])
           ->queryAll();
        $regions = Yii::$app->db->createCommand('SELECT name FROM regions')->queryAll();
        return $this->render('estates', [ "villa" => $villa, "res" => $reserves, "regions" => $regions, "prices"=> $prices]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
		

		$this->layout = 'login';
		
        if (!Yii::$app->user->isGuest) {
			return $this->redirect('@web/kiraliceesma');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->redirect('@web/kiraliceesma');
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
	
    public function actionEstates()
    {
		$estates = Yii::$app->db->createCommand('SELECT * FROM estates')->queryAll();
		//$data = json_encode($estates);
        return $this->renderPartial('estates', [
            'estates' => $estates,
        ]);
    }
	
    public function actionReserve()
    {
        $request = Yii::$app->request;

        $datas  = [
        "name"                          => $request->post("name"),
        "description"                        => $request->post("description"),
        "start_date"                       => $request->post("start_date"),
        "end_date"                         => $request->post("end_date"),
        "villa_id"                         => $request->post("villa_id")
        ];
        $id = $request->post("id");
        if (!empty($id))
        {
                Yii::$app->db->createCommand()->update('reservations', $datas, "id = $id")->execute();
        }
        else
        {
                Yii::$app->db->createCommand()->insert('reservations', $datas, "id = $id")->execute();
                $id = Yii::$app->db->getLastInsertID();
        }
        return $id;
    }
	
    public function actionPrice()
    {
        $request = Yii::$app->request;

        $datas  = [
        "price"                          => $request->post("price"),
        "start_date"                       => $request->post("start_date"),
        "end_date"                         => $request->post("end_date"),
        "villa_id"                         => $request->post("villa_id")
        ];
        $id = $request->post("id");
        if (!empty($id))
        {
                Yii::$app->db->createCommand()->update('prices', $datas, "id = $id")->execute();
        }
        else
        {
                Yii::$app->db->createCommand()->insert('prices', $datas, "id = $id")->execute();
                $id = Yii::$app->db->getLastInsertID();
        }
        return $id;
    }
	
    public function actionDeletepic()
    {
        $request = Yii::$app->request;

        $datas  = [
        "price"                          => $request->post("key"),
        "start_date"                       => $request->post("extra"),
        "villa_id"                         => $request->post("id")
        ];
        $id = $request->post("id");
        /*
        if (!empty($id))
        {
                Yii::$app->db->createCommand()->update('prices', $datas, "id = $id")->execute();
        }
        else
        {
                Yii::$app->db->createCommand()->insert('prices', $datas, "id = $id")->execute();
                $id = Yii::$app->db->getLastInsertID();
        }*/
        return "{}";
    }
	
    public function actionSavevilla()
    {
        $request = Yii::$app->request;
		if ($request->isPost) 
		{
			$id = $request->post("villa_id");
            $pictures = $request->post("pictures");
            if (!empty($pictures))
                $pictures = json_decode($pictures);
            else
                $pictures = [];
            
            if (count($_FILES) > 0)
            {
                $files = UploadedFile::getInstancesByName("files");
                ini_set('max_execution_time', 30000);
                ini_set('memory_limit', '1024M');
                
                $uploaddir = \Yii::getAlias('@webroot') . '/images/villa/';
                $i = count($pictures);
                foreach ($files as $file) 
                {
                    $pictures[$i] = $file->baseName . '.' . $file->extension;
                    $uploadfile = $uploaddir . $file->baseName . '.' . $file->extension;
                    $file->saveAs($uploadfile);

                    $img = $imagine = Image::getImagine()
                    ->open("$uploadfile");

                    
                    $img->thumbnail(new Box(723, 407))
                    ->save($uploaddir."b/".$pictures[$i], ['quality' => 90]);

                    $img->thumbnail(new Box(360, 271))
                    ->save($uploaddir."t/".$pictures[$i], ['quality' => 60]); 
                    $i++;
                }
                /*
                for ($i = 0; $i < count($_FILES['files']); $i++)
                {
                    $pictures[$i] = basename($_FILES['files']['name'][$i]);
                    $uploadfile = $uploaddir . basename($_FILES['files']['name'][$i]);
                    if (file_exists($uploadfile)) {
                        unlink("$uploadfile");
                        //return "Bu resim zaten varmış. başka bir resimle karıştırıyor olmayasın? ". basename($_FILES['files']['name'][$i]);
                    }
                    move_uploaded_file($_FILES['files']['tmp_name'][$i], $uploadfile);
                      
                    $img = $imagine = Image::getImagine()
                    ->open("$uploadfile");

                    
                    $img->thumbnail(new Box(723, 407))
                    ->save($uploaddir."b/".$pictures[$i], ['quality' => 90]);

                    $img->thumbnail(new Box(360, 271))
                    ->save($uploaddir."t/".$pictures[$i], ['quality' => 60]); 
                }
                ,*/
            }

			$datas  = [
			"name"                          => $request->post("name"),
			"region"                        => $request->post("region"),
			"currency"                      => $request->post("currency"),
			"address"                       => $request->post("address"),
			"owner"                         => $request->post("owner"),
			"owner_phone"                   => $request->post("owner_phone"),
			"owner_mail"                    => $request->post("owner_mail"),
			"floor_count"                   => $request->post("floor_count"),
			"max_people_count"              => $request->post("max_people_count"),
			"additional_people_count"       => $request->post("additional_people_count"),
			"additional_people_price"       => $request->post("additional_people_price"),
			"additional_baby_bed_count"     => $request->post("additional_baby_bed_count"),
			"additional_baby_bed_price"     => $request->post("additional_baby_bed_price"),
			"deposit"                       => $request->post("deposit"),
			"cleaning_price"                => $request->post("cleaning_price"),
			"private_villa"                 => $request->post("private_villa"),
			"inside_site"                   => $request->post("inside_site"),
			"private_pool"                  => $request->post("private_pool"),
			"shared_pool"                   => $request->post("shared_pool"),
			"heated_pool"                   => $request->post("heated_pool"),
			"closed_pool"                   => $request->post("closed_pool"),
			"natural_secured"               => $request->post("natural_secured"),
			"curtain_secured"               => $request->post("curtain_secured"),
			"sea_view"                      => $request->post("sea_view"),
			"nature_view"                   => $request->post("nature_view"),
			"private_parking"               => $request->post("private_parking"),
			"shared_parking"                => $request->post("shared_parking"),
			"pet_allowed"                   => $request->post("pet_allowed"),
			"description"                   => $request->post("description"),
			"dish_washer"                   => $request->post("dish_washer"),
			"washer"                        => $request->post("washer"),
			"fridge"                        => $request->post("fridge"),
			"oven"                          => $request->post("oven"),
			"heater"                        => $request->post("heater"),
			"microwave"                     => $request->post("microwave"),
			"kitchen_tools"                 => $request->post("kitchen_tools"),
			"kettle"                        => $request->post("kettle"),
			"toast_maker"                   => $request->post("toast_maker"),
			"toaster"                       => $request->post("toaster"),
			"iron"                          => $request->post("iron"),
			"ironing_table"                 => $request->post("ironing_table"),
			"hair_dryer"                    => $request->post("hair_dryer"),
			"safety_box"                    => $request->post("safety_box"),
			"fireplace"                     => $request->post("fireplace"),
			"air_conditioner"               => $request->post("air_conditioner"),
			"seating_group"                 => $request->post("seating_group"),
			"food_table"                    => $request->post("food_table"),
			"television"                    => $request->post("television"),
			"dvd_player"                    => $request->post("dvd_player"),
			"jacuzzi"                       => $request->post("jacuzzi"),
			"bathtub"                       => $request->post("bathtub"),
			"pool"                          => $request->post("pool"),
			"child_pool"                    => $request->post("child_pool"),
			"camelia"                       => $request->post("camelia"),
			"barbeque"                      => $request->post("barbeque"),
			"sunbed"                        => $request->post("sunbed"),
			"umbrella"                      => $request->post("umbrella"),
			"water"                         => $request->post("water"),
			"gas"                           => $request->post("gas"),
			"electricity"                   => $request->post("electricity"),
			"limited_electricity"           => $request->post("limited_electricity"),
			"wireless"                      => $request->post("wireless"),
            "pictures"                      => $pictures,
			"created"                       => date("Y-m-d"),
			"udpated"                       => date("Y-m-d")
			];
            if (!empty($id))
            {
                Yii::$app->db->createCommand()->update('estates', ["name" => $this->slugify($request->post("name")), "data" => json_encode($datas)], "id = $id")->execute();
            }
            else
            {
			    Yii::$app->db->createCommand()->insert('estates', ["name" => $this->slugify($request->post("name")), "data" => json_encode($datas)])->execute();
            }
			//Yii::$app->db->createCommand()->insert('estates', ["name" => $request->post("name"), "data" => json_encode($datas)])->execute();
			//('INSERT INTO estates (name, data) values (:name, :data)')->bindValue([":name":=>$post["name"], ":data"=>$post["data"]])->execute();
			return $this->redirect('@web/kiraliceesma');
		}
		$post = $request->post();
		$estates = Yii::$app->db->createCommand('SELECT * FROM estates')->queryAll();
		//$data = json_encode($estates);
        return $this->renderPartial('estates', [
            'estates' => $estates,
        ]);
    }
}
