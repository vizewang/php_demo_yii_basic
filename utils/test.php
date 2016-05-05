<?php
namespace app\utils;
/**
 * Created by PhpStorm.
 * User: PHPnew6
 * Date: 2016/5/4
 * Time: 10:23
 */
class test
{
public static $v=0;
    function __construct()
    {
        self::$v++;
    }
    static function getV(){
        return self::$v;
    }
    
}