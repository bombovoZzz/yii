<?php

namespace frontend\controllers;

use yii\web\Controller;

class OfflineController extends Controller {
    
    public $layout = 'offline';
    
    public function actionIndex() {
        return $this->render('index');
    }
    
}
