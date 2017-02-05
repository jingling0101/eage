<?php
/**
 * Created by PhpStorm.
 * Date: 2016/12/13
 * Time: 16:25
 */

namespace admin\models;

use yii;
use yii\db\ActiveRecord;
use yii\db\Query;
use yii\helpers\Json;

class Base extends ActiveRecord
{
    public $table = NULL;

    protected $model;

    public function __construct()
    {

    }

    public function getList()
    {
        $query = new Query();
        $rs = $query->select('*')
                    ->from($this->table)
                    ->all();
        return $rs;
    }

    public function create(Array $data = []) {
        if ($this->setAttributes($data)) {
            $error = $this->getErrors();
            return $error;
        }
        $this->save();
        return json_encode(['code' => 0 , 'msg' => 'ok']);
    }

}