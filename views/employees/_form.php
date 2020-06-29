<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">

        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'cid')->widget(MaskedInput::classname(), [
                'mask' => '9-9999-99999-99-9',
            ])
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'prename')->dropDownList([
                'นาย' => 'นาย',
                'นาง' => 'นาง',
                'นางสาว' => 'นางสาว',
                    ], ['prompt' => 'เลือกคำนำหน้า..']);
            ?>
        </div>     
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
</div>

<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?php
            echo $form->field($model, 'sex')->radioList([
                        '1'=>'ชาย',
                        '2'=>'หญิง',    
                ]);
            ?>
            <?= $form->field($model, 'sex')->textInput() ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">

            <?= $form->field($model, 'birthdath')->widget(DatePicker::ClassName(),
            [
            'language'=>'th',
            'name' => 'check_issue_date', 
            'options' => ['placeholder' => 'Select date ...'],
            'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
            ]
            ]);?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'adress')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'tumbon')->textInput() ?>
        </div>
</div>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'amphur')->textInput() ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'chw')->textInput() ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'education')->dropDownList(['' => '',], ['prompt' => '']) ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'ability')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'comein')->textInput() ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'department_id')->textInput() ?>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
        <?= $form->field($model, 'status')->textInput() ?>
    </div>   
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>
    </div>
</div>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
