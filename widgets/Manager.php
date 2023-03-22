<?php

namespace app\widgets;
use app\models\Managers;
use yii\bootstrap4\Widget;

class Manager extends Widget
{
    public function run()
    {
        $models = Managers::find()->where(["status"=>1])->all();
        return $this->render('manager',compact("models"));
    }
}