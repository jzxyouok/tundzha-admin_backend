<?php
namespace api\modules\v2\controllers;

use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex(){
        \Yii::$app->response->format = \Yii\web\Response::FORMAT_JSON;
        return [
            'message' => 'v2 Home Controller',
            'code' => 0,
        ];
    }
}