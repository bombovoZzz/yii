<?php
/**
 * Created by PhpStorm.
 * User: bomb
 * Date: 15.09.18
 * Time: 16:31
 */

namespace frontend\myWidget\header;
use yii\base\Widget;

class HeaderWidget extends Widget {

    public $search = false;

    public function init () {
        parent::init();
        HeaderAsset::register($this->getView());
    }

    public function run () {
        return $this->render('header', ['search' => $this->search]);
    }

}