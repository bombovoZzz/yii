<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class InfoController extends Controller {

    public $layout = 'info';

    public function actionIndex() {

        return $this->render('index');
    }
    
    public function actionAbout() {

        return $this->render('bout');
    }
    
}