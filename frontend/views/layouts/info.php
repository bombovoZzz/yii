<?php

use frontend\myWidget\header\HeaderWidget;


?>
<?php $this->beginPage()?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
    <?php $this->head()?>
</head>
<?php $this->beginBody()?>
<body>
<?= $content?>


</body>
<?php $this->endBody()?>
</html>
<?php $this->endPage()?>
