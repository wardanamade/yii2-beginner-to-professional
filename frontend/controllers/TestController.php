<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller{

    public function actionServer(){
        echo 'testing Controller';
    }

    public function actionTesting()
    {
        $number = 12345;
        $name = 'Microphone';
        $array = ['mic','system','video'];
        return $this->render('testing',['number12'=>$number,'name'=>$name,'array'=>$array]);
    }

}