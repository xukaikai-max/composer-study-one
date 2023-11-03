<?php
    include_once('/data/wwwroot/my-composer/vendor/autoload.php');
    $helloObj = new \Xukai\Pro01\code\Hello();
?>
<h2>类调用测试 : <?= $helloObj->echoNumber() ?></h2>
