<?php

use app\models\StaticFunctions;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Managers */
/* @var $form yii\widgets\ActiveForm */


?>




<div class="managers-form">
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class=""><a href="<?=\yii\helpers\Url::to(['/admin'])?>">Bosh sahifa/</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><span>Yangi xodim qo'shish</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
        </header>
    </div>
    <?php $form = ActiveForm::begin(); ?>
    <div class="card  mx-auto"  style="margin-bottom: 10px">
        <div class="card-body p-4 border rounded">
            <div class="row">
                <div class="col-6">
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>
                    </div>
    <div class="col-6">
        <div class="box">
            <div class="js--image-preview " style="background-image: url(<?=StaticFunctions::getImage('managers',$model->id,$model->images)?>)"></div>
            <div class="upload-options">
                <label class="btn-light">
                    <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-light image-upload ']) ?>
                </label>
            </div>
        </div>
    </div>
</div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
