<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;


/**
 * UrlHelpers controller
 */
class UrlHelperController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSecond()
    {
        echo 'You are here';
    }

}
