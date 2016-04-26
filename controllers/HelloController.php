<?php
/**
 * Created by PhpStorm.
 * User: vize
 * Date: 2016/4/23
 * Time: 19:32
 */
namespace app\controllers;

use yii\web\Controller;
use app\models\Test;
class HelloController extends Controller
{
    public $layout="common";
    public function actionIndex()
    {
      $sql='select * from test where id=1';
       $results= Test::findBySql($sql)->all();
        print_r($results);
    }
}