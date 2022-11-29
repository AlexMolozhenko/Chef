<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<h1>Скажи <?= Html::encode($message) ?></h1>

<div class="post">
    <?= HtmlPurifier::process($message."\\".$message) ?>
</div>
