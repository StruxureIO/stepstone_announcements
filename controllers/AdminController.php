<?php

namespace humhub\modules\stepstone_announcements\controllers;

use humhub\modules\admin\components\Controller;
use humhub\modules\stepstone_announcements\models;
use humhub\modules\stepstone_announcements\models\SsAnnouncements;
use humhub\modules\stepstone_announcements\models\AnnouncementsSearch;
use Yii;


class AdminController extends Controller
{
  
  public $mAnnouncements;
  

  /**
   * Render admin only page
   *
   * @return string
   */
  public function actionIndex() {
    //Yii::$app->cache->flush();
      
    $searchModel = new \humhub\modules\stepstone_announcements\models\AnnouncementsSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider->sort->defaultOrder = ['announcment_title' => SORT_ASC];

    return $this->render('index', [
      'searchModel' => $searchModel,
      'dataProvider' => $dataProvider,
    ]);
      
      
  }
  
  public function actionAddAnnouncment() {
    
    $model = new \humhub\modules\stepstone_announcements\models\SsAnnouncements();

    if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
      return $this->redirect(['admin/index']);
    }

    return $this->render('add-announcment', ['model' => $model]);    
    
  }
    
  public function actionUpdateAnnonucement($id) {
    
    $this->mAnnouncements = new \humhub\modules\stepstone_announcements\models\SsAnnouncements();

    $model = $this->mAnnouncements::find()->where(['id' => $id])->one();      

    if ($model->load(Yii::$app->request->post()) && $model->validate() &&  $model->save()) {
      return $this->redirect(['admin/index']);
    }

    return $this->render('update-annonucement', [
      'model' => $model,
    ]);           
    
  }
  
  public function actionDeleteAnnonucement($id) {

    $model = $this->findAnnonucementModel($id);
    $model->delete();

    return $this->redirect(['admin/index']);

  }  
  
  protected function findAnnonucementModel($id){

    $mAnnonucements = new \humhub\modules\stepstone_announcements\models\SsAnnouncements();

    if(($model = $mAnnonucements::findOne($id)) !== null) {
      return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
  }   
  
    

}

