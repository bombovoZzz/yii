<?php
/**
 * Created by PhpStorm.
 * User: bomb
 * Date: 20.09.18
 * Time: 15:56
 */

namespace frontend\models;
use Yii;

class Cities {

    public static function getIdCity ($city) {
        $sql = "SELECT [[id]] FROM {{cities}} WHERE name=:city";
        return Yii::$app->db->createCommand($sql)->bindValue(':city', $city)->queryOne();
    }

}