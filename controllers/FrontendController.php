<?php

namespace app\controllers;

use app\models\BaiViet;

class FrontendController extends \yii\web\Controller
{
    public $layout = 'frontend_layout';

    public function actionIndex()
    {
        $items = BaiViet::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('index', ['items' => $items]);
    }

    public function actionView($id)
    {
        $model = BaiViet::findOne($id);
        return $this->render("view", ['model' => $model]);
    }

}
