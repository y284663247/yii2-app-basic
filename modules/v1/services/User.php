<?php

namespace app\modules\v1\services;

/**
 * Class User
 * @package app\modules\v1\services
 */
class User extends \app\services\User
{
    /**
     * 返回对应列表
     * @name: fields
     * @return array
     * @author: rickeryu <lhyfe1987@163.com>
     * @time: 17/11/21 上午9:58
     */
    public function fields() {
        $fields =  parent::fields(); // TODO: Change the autogenerated stub
        unset($fields['password_hash'],$fields['password_reset_token'],$fields['auth_key'],$fields['access_token']);
//        $fields['created_at'] = function ($model){
//            return \Yii::$app->formatter->asDatetime($model->created_at);
//        };
        return $fields;
    }
}