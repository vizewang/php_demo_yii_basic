<?php
/**
 * Created by PhpStorm.
 * User: weizwang
 * Date: 2016/4/19
 * Time: 17:29
 */
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>
<ul>
    <li><label>Name</label>:<?=Html::encode($model->name)?></li>
    <li><label>Email</label>:<?=Html::encode($model->email)?></li>
</ul>