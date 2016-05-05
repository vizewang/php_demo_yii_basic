<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use yii\base\Application;
use app\utils\test;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends Controller
{

    /**
     * Lists all Country models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }


    public function actionTest()
    {
        \Yii::$app->request->post('ContactForm');
    }
}

function __autoload($class)
{
    require_once "$class.class.php";
}

class test2
{
}

class test1
{
}

class testChidren extends test1
{
}
