<?php
/**
 * Created by PhpStorm.
 * User: weizwang
 * Date: 2016/4/19
 * Time: 17:11
 */

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}