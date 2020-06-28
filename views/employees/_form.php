<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'id')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'cid')->widget(\yii\widgets\MaskedInput::classname(),[
                'mask'=>'9-9999-99999-99-9',
            ]) ?>
        </div>
        <?= $form->field($model, 'prename')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'sex')->textInput() ?>

        <?= $form->field($model, 'birthdath')->textInput() ?>

        <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tumbon')->textInput() ?>

        <?= $form->field($model, 'amphur')->textInput() ?>

        <?= $form->field($model, 'chw')->textInput() ?>

        <?= $form->field($model, 'education')->dropDownList(['' => '',], ['prompt' => '']) ?>

        <?= $form->field($model, 'ability')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'department_id')->textInput() ?>

        <?= $form->field($model, 'comein')->textInput() ?>

        <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
