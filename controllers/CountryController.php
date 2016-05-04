<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

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
    
    public function actionTest(){
        define("GREETING","Hello world");
        echo defined("GREETING");
    }
}
