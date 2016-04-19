<?php
/**
 * Created by PhpStorm.
 * User: weizwang
 * Date: 2016/4/19
 * Time: 15:00
 */
echo "set cookie";
$value=time();
setcookie("test",$value,time()+3600,"/");