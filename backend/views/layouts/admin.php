<?php

    use backend\assets\AppAsset;
    AppAsset::register($this);

?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php $this->head();?>
</head>
<?php $this->beginBody();?>
<body>
    <?=$content;?>
</body>
<?php $this->endBody();?>
</html>
<?php $this->endPage();?>