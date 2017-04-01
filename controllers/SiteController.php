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
        $rcookies = Yii::$app->request->cookies;
        $cookies = Yii::$app->response->cookies;

        $model = [];
        if ($rcookies->has('start'))
        {
            $model["start"] = $rcookies->get('start');
            $model["end"] = $rcookies->get('end');
        }

        if (!empty($start))
        {
        }



        $name = Yii::$app->getRequest()->getQueryParam('name');
        $slug = $this->slugify($name);  
        if (empty($slug))
            return $this->actionList();



        $name = Yii::$app->getRequest()->getQueryParam('name');
        $params = [':name' => $slug];
        $villa = Yii::$app->db->createCommand('SELECT * FROM estates where name = :name')
        ->bindValues($params)
           ->queryOne();
        if (count($villa) == 0)
			return $this->redirect('@web/villa');

        $reserves = Yii::$app->db->createCommand('SELECT * FROM reservations where villa_id = :id and start_date >= :start_date and end_date <= :end_date order by start_date')
        ->bindValues([":id" => $villa["id"], ":start_date" => (date('Y')."-01-01"), ":end_date" => ((date('Y')+1)."-01-01")])
           ->queryAll();
        $prices = Yii::$app->db->createCommand('SELECT * FROM prices where villa_id = :id and start_date >= :start_date and end_date <= :end_date order by start_date,end_date')
        ->bindValues([":id" => $villa["id"], ":start_date" => (date('Y')."-01-01"), ":end_date" => ((date('Y')+1)."-01-01")])
           ->queryAll();
        $model["villa"] = $villa;
        $model["res"] = $reserves;
        $model["prices"] = $prices;
        return $this->render('villa', $model);
    }
    
    public function actionList()
    {
        $rcookies = Yii::$app->request->cookies;


        $name = Yii::$app->request->get('n');
        $start = Yii::$app->request->get('sd');
        $end = Yii::$app->request->get('ed');
        $adult = Yii::$app->request->get('a');
        $child = Yii::$app->request->get('c');
        $adult = empty($adult) ? 2 : $adult;
        $child = empty($child) ? 0 : $child;

        $cookies = Yii::$app->response->cookies;
        $villa_ids = "";
        $priceq = "";
        if (empty($start) && $rcookies->has('start'))
        {
            $start = $rcookies->get('start');
            $end = $rcookies->get('end');
        }
        if (!empty($start))
        {
            $cookies->remove('start');
            $cookies->remove('end');
            // add a new cookie to the response to be sent
            $cookies->add(new \yii\web\Cookie([
                'name' => 'start',
                'value' => $start,
            ]));
            $cookies->add(new \yii\web\Cookie([
                'name' => 'end',
                'value' => $end,
            ]));
            $params = [':name' => $name];

            $villa_ids = Yii::$app->db->createCommand('SELECT group_concat(distinct villa_id) ids FROM reservations 
                where ((start_date <= :start_date and end_date >= :start_date) 
                    or (start_date <= :end_date and end_date >= :end_date) 
                    or (start_date >= :start_date and end_date <= :end_date) 
                    or (start_date <= :start_date and end_date >= :end_date))')
            ->bindValues([':start_date' => $start,':end_date' => $end])
            ->queryScalar();
            $priceq = " ((start_date <= :start_date and end_date >= :start_date) 
                    or (start_date <= :end_date and end_date >= :end_date) 
                    or (start_date >= :start_date and end_date <= :end_date) 
                    or (start_date <= :start_date and end_date >= :end_date)) and ";

        }
        if (empty($villa_ids))
        {
            $posts = Yii::$app->db->createCommand('SELECT * FROM estates')->queryAll();
            $prices = Yii::$app->db->createCommand("SELECT * FROM prices where $priceq start_date >= now() or (start_date <= now() and end_date >= now()) order by villa_id,start_date,id desc")
            ->bindValues([':start_date' => $start,':end_date' => $end])
            ->queryAll();
        }
        else
        {
            $posts = Yii::$app->db->createCommand("SELECT * FROM estates where id not in ($villa_ids)")->queryAll();
            $prices = Yii::$app->db->createCommand("SELECT * FROM prices where $priceq villa_id not in ($villa_ids) and  (start_date >= now() or (start_date <= now() and end_date >= now()))  order by villa_id,start_date,id desc")
            ->bindValues([':start_date' => $start,':end_date' => $end])
            ->queryAll();
        }
        $totalday = 0;
        if (empty($start))
        {
            for ($i=0;$i<count($posts);$i++)
            {
                $villa = $posts[$i];
                $minpri = 99999;
                foreach ($prices as $price)
                {
                    if ($price["villa_id"] == $villa["id"])
                    {
                        if ($price["price"] < $minpri)
                            $minpri = $price["price"];
                    }
                }
                $posts[$i]["price"] = $minpri;
            }
        }
        else
        {
            $sdate = new \DateTime($start); 
            $edate = new \DateTime($end); 

            if ($sdate >= $edate)
            {
                $sdate->modify('+1 day');
                $end = $sdate->format('Y-m-d');
                $edate = $sdate;
                $sdate = new \DateTime($start); 
            }

            while ($sdate < $edate)
            {
                $totalday++;
                $date = $sdate->format('Y-m-d');
                for ($i=0;$i<count($posts);$i++)
                {
                    $posts[$i]["price"] = 0;
                    $villa = $posts[$i];
                    foreach ($prices as $price)
                    {
                        if ($price["villa_id"] == $villa["id"] && $price["start_date"] <= $date && $price["end_date"] >= $date)
                        {
							$date1 = new \DateTime($start);
							$date2 = new \DateTime($end);
							$interval = $date1->diff($date2);
                            $posts[$i]["price"] += $price["price"];
                            break;
                        }
                    }
                }
                
                $sdate->modify('+1 day');
            }
        }

        for ($i=0;$i<count($posts);$i++)
        {
            $temp = json_decode($posts[$i]["data"],true);
            $hp = "";
            if (isset($temp["air_conditioner"]))
                $hp .= '<li class="icohp-air"></li>';
                
            if (isset($temp["private_pool"]) || isset($temp["shared_pool"]) || isset($temp["heated_pool"]) || isset($temp["closed_pool"]))
                $hp .= '<li class="icohp-pool"></li>';
                
            if (isset($temp["private_parking"]) ||isset($temp["shared_parking"]))
                $hp .= '<li class="icohp-parking"></li>';
                
            if (isset($temp["pet_allowed"]))
                $hp .= '<li class="icohp-pets"></li>';
                
            if (isset($temp["hair_dryer"]))
                $hp .= '<li class="icohp-hairdryer"></li>';
                
            if (isset($temp["barbeque"]))
                $hp .= '<li class="icohp-grill"></li>';
                


            if (isset($temp["television"]))
                $hp .= '<li class="icohp-tv"></li>';
                
            if (isset($temp["fridge"]))
                $hp .= '<li class="icohp-fridge"></li>';
                
            if (isset($temp["microwave"]))
                $hp .= '<li class="icohp-microwave"></li>';
                
            if (isset($temp["washer"]))
                $hp .= '<li class="icohp-washing"></li>';
                
            $temp["hotelpreferences"] = $hp;
            $temp["price"] = $posts[$i]["price"];
            $posts[$i]["data"] = json_encode($temp);
            $posts[$i]["slug"] = $this->slugify($posts[$i]["name"]);  
        }

        $model = [
            "name"=>$name,
            "start"=>$start,
            "end"=>$end,
            "adult"=>$adult,
            "child"=>$child,
            "villas"=>$posts,
            "days" => $totalday
        ];
        return $this->render('list', [ "model" => $model]);
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
	
    public function actionSendcontact()
    {
        $mailbody = '<h3>İletişim sayfasından yeni mesaj geldi.</h3>
                            <p><b>İsim: </b> '.Yii::$app->request->post('name').'</p>
                            <p><b>e-mail:</b> '.Yii::$app->request->post('mail').'</p>
                            <p><b>Тема:</b> '.Yii::$app->request->post('phone').'</p>
                            <p><b>Mesaj:</b></p>
                            <p>'.Yii::$app->request->post('comment').'</p>
                            ';
        return Yii::$app->mailer->compose()
            ->setFrom('info@kiralikvillam.com')
            ->setTo('zubeyr_aydemir@msn.com')
            ->setSubject('KiralikVillam İleticim')
            ->setHtmlBody($mailbody)
            ->send();

        
    }
    public function actionSex()
    {
		return;
        ini_set('max_execution_time', 30000);
        ini_set('memory_limit', '1024M');
		$uploaddir = \Yii::getAlias('@webroot') . '/images/villa/';
		
        $files = scandir($uploaddir);
		$lastvilla = "";
		$jumper = 0;
		$find = false;
		$pass = false;
        $pics = [];
        $picc = 0;
        for ($ip=0;$ip<count($files);$ip++)
        { 
            $file = $files[$ip];
            if (strpos($file, '.jpg') !== false || strpos($file, '.JPG') !== false) 
			{

				$villaname = substr($file, 0, -7);
				$slug = $this->slugify($villaname);  
                
				
				if ($lastvilla != $villaname)
				{ 
                    if ($lastvilla == "")
					    $lastvilla = $villaname;
                    else
                    {
                        echo "insert ".$lastvilla."<br>";
                        $edata = '{"name":"'.$lastvilla.'","region":"","currency":"","address":"","owner":"","owner_phone":"","owner_mail":"","floor_count":"","max_people_count":"","additional_people_count":"","additional_people_price":"","additional_baby_bed_count":"","additional_baby_bed_price":"","deposit":"","cleaning_price":"","private_villa":null,"inside_site":null,"private_pool":null,"shared_pool":null,"heated_pool":null,"closed_pool":null,"natural_secured":null,"curtain_secured":null,"sea_view":null,"nature_view":null,"private_parking":null,"shared_parking":null,"pet_allowed":null,"description":"","dish_washer":null,"washer":null,"fridge":null,"oven":null,"heater":null,"microwave":null,"kitchen_tools":null,"kettle":null,"toast_maker":null,"toaster":null,"iron":null,"ironing_table":null,"hair_dryer":null,"safety_box":null,"fireplace":null,"air_conditioner":null,"seating_group":null,"food_table":"","television":null,"dvd_player":null,"jacuzzi":null,"bathtub":null,"pool":null,"child_pool":null,"camelia":null,"barbeque":null,"sunbed":null,"umbrella":null,"water":null,"gas":null,"electricity":null,"limited_electricity":"","wireless":null,"pictures":'.json_encode($pics).',"created":"2017-03-21","udpated":"2017-03-21"}';
                        Yii::$app->db->createCommand()->insert('estates', ["name" => $this->slugify($lastvilla), "data" => $edata])->execute();
					    $lastvilla = $villaname;
                        $pics = [];
                        $picc = 0;
                    }
				}
                echo $file."<br>";
                $img = $imagine = Image::getImagine()
                ->open($uploaddir.$file);

                
                $img->thumbnail(new Box(723, 407))
                ->save($uploaddir."b/$file", ['quality' => 90]);

                $img->thumbnail(new Box(360, 271))
                ->save($uploaddir."t/$file", ['quality' => 60]);
                $pics[$picc] = $file;
                $picc++;
            }
        }
        return '';//<html><head><meta http-equiv="refresh" content="0; url=http://balayivillam.com/sex?name='.$slug.'" /></head></html>';


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
        $about = Yii::$app->db->createCommand('SELECT value FROM settings where name = :name')
        ->bindValues([":name" => "about"])
           ->queryScalar();
        return $this->render('about', ["about" => $about]);
    }
}
