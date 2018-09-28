<?php

use frontend\assets\AppAsset;
use frontend\myWidget\HeaderWidget;
use yii\helpers\Url;
AppAsset::register($this);

?>
<?php $this->beginPage()?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <?php $this->head()?>
</head>
<?php $this->beginBody()?>
<body>

<a href="<?= Url::to(['/'])?>">Главная</a><br>
<a href="<?= Url::to(['account/register'])?>">Регистрация</a><br>
<a href="<?= Url::to(['account/login'])?>">Авторизация</a>

<?= HeaderWidget::begin()?>
<?= HeadetWidget::end()?>
<?= $content?>
</body>
<?php $this->endBody()?>
</html>
<?php $this->endPage()?>
