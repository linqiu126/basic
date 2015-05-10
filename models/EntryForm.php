<?php
/**
 * Created by PhpStorm.
 * User: ZJL
 * Date: 2015/5/9
 * Time: 18:19
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
