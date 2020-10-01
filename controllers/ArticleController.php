<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Article;

class ArticleController extends Controller
{
    // ...existing code...

    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model

            // do something meaningful here about $model ...

            return $this->render('view', ['model' => $model]);
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('create', ['model' => $model]);
        }
    }
}

?>