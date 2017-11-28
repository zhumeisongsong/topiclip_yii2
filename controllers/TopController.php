<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

class TopController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}