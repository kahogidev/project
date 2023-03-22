<?php

namespace app\widgets;

use app\models\Tours;
use yii\bootstrap4\Widget;
use app\models\Contacts;

class Contact extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        $tours = Tours::find()->where(['status' => 1])->all();
        return $this->render('contact', compact('models', 'tours'));
    }
}