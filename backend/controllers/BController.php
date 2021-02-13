<?php
namespace backend\controllers;
use yii;
use yii\web\Controller;

/**
 * Class BController 后台验证登录基类，后台所有的类都应继承于此类
 * @package backend\controllers
 */
class BController extends Controller
{
    public function beforeAction($action)
    {
//        return parent::beforeAction($action); // TODO: Change the autogenerated stub
        if (Yii::$app->user->isGuest){
            return $this->goHome();
        }else{
            return true;
        }
    }
}