<?php

namespace app\widgets;

use app\models\Hotel;
use yii\bootstrap4\Widget;

class Hotels extends Widget
{
    public function run()
    {
        $models = Hotel::find()->where(["status" => 1])->all();
        return $this->render('hotels', compact("models"));
    }
}