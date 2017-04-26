<?php
namespace api\modules\v1\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex(){
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        return [
            'message' => 'v1 Home Controller',
            'code' => 0,
        ];
    }
}