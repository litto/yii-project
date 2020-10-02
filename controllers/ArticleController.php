<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Article;
use yii\web\UploadedFile;
use yii\helpers\Url;

class ArticleController extends Controller
{
    // ...existing code...

    public function actionCreate()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post())) {
            // valid data received in $model
           $postvalues=Yii::$app->request->post();
          
                    $title =  $postvalues['Article']['title'];
                       $body = $postvalues['Article']['body'];
                        
                        $dat=date('Y-m-d H:i:s');

$uploadPath = Url::base() .'uploads';
$customer = new Article();
$customer->title = $title;
$customer->body = $body;
$customer->user_id = 1;
$customer->slug = $title;

$image =  \yii\web\UploadedFile::getInstanceByName('Article[image]');
$original_name = $image->baseName;  
$newFileName = \Yii::$app->security
                        ->generateRandomString().'.'.$image->extension;
if ($image->saveAs($uploadPath . '/' . $newFileName)) {
            $imagename = $newFileName;

        }else{

            $imagename="demo.jpg";
        }


$customer->image = $imagename;
$customer->published = 1;
$customer->created = $dat;
$customer->save();
            // do something meaningful here about $model ...

                     $this->redirect('/article/index');
        } else {
            // either the page is initially displayed or there is some validation error
            return $this->render('create', ['model' => $model]);
        }
    }


    public function actionIndex()
    {
        $query = Article::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $articles = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'records' => $articles,
            'pagination' => $pagination,
        ]);
    }


    public function actionEdit($id) {

$record = Article::find()
    ->where(['id' => $id])
    ->one();
        $model = new Article();

        if ($model->load(Yii::$app->request->post())) {
$postvalues=Yii::$app->request->post();
          
                    $title =  $postvalues['Article']['title'];
                       $body = $postvalues['Article']['body'];
                       $id=$postvalues['Article']['id'];
                        $dat=date('Y-m-d H:i:s');
$user = Article::find()->where(['id'=>$id])->one();
$user->title = $title;
$user->body = $body;
$user->slug = $title;
$user->modified = $dat;
$user->update();

$uploadPath = Url::base() .'uploads';
$image =  \yii\web\UploadedFile::getInstanceByName('Article[image]');
$original_name = $image->baseName;  
$newFileName = \Yii::$app->security
                        ->generateRandomString().'.'.$image->extension;
if ($image->saveAs($uploadPath . '/' . $newFileName)) {
$imagename = $newFileName;
$article = Article::find()->where(['id'=>$id])->one();
$article->image = $imagename;
$article->update();
}

                     $this->redirect('/article/index');
        } else {

            return $this->render('edit', ['record' => $record,'model'=>$model]);
        }
    }


     public function actionPublish($id) {

$article = Article::find()->where(['id'=>$id])->one();
$article->published =1;
$article->update();
$this->redirect('/article/index');

}
     public function actionUnpublish($id) {

$article = Article::find()->where(['id'=>$id])->one();
$article->published =0;
$article->update();
$this->redirect('/article/index');

}

     public function actionDelete($id) {

$article = Article::find()->where(['id'=>$id])->one();
$article->delete();
$this->redirect('/article/index');


}


}

?>