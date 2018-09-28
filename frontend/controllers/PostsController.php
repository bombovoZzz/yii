<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Cities;

class PostsController extends Controller{

    public function actionIndex() {

        $get = Yii::$app->request->get();

        // if (!$get) {
        //     return $this->redirect('/Вся_ЛНР');
        // }

        // $id_city = Cities::getIdCity($get['city']);

        return $this->render('index', ['get' => $get]);
    }
    
}
