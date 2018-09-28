<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Register;

class AccountController extends Controller {

    public $layout = 'account';

    public function actionLogin() {
        return $this->render('login');
    }

    public function actionRegister() {

        $model = new Register();

        return $this->render('register', ['model' => $model]);
    }

}
