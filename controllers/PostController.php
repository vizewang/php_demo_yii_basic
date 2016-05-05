<?php
/**
 * Created by PhpStorm.
 * User: PHPnew6
 * Date: 2016/5/4
 * Time: 13:55
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Post;
use yii\web\NotFoundHttpException;

class PostController extends Controller
{
    public $id;
    public function actionView($id)
    {
        $model = Post::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $model = new Post;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('view1', [
                'model' => $model,
            ]);
        }
    }
}