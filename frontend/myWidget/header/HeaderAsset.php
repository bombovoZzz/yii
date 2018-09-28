<?php
/**
 * Created by PhpStorm.
 * User: bomb
 * Date: 15.09.18
 * Time: 16:59
 */

namespace frontend\myWidget\header;
use yii\web\AssetBundle;

class HeaderAsset extends AssetBundle {

    public $sourcePath = '@frontend/myWidget/header/asset';
    public $css = [
      'header.css'
    ];
}