<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Managers */

$this->title = 'Xodimlarni yangilash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="managers-update">
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Bosh sahifa/</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Xodim ma'lumotlarini yangilash</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
        </header>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
