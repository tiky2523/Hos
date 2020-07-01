<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Provinces;
use kartik\widgets\DepDrop;
use app\models\Amphures;
use app\models\Districts;
use yii\helpers\Url;
use app\models\Departments;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2"> 
            <?=
            $form->field($model, 'cid')->widget(\yii\widgets\MaskedInput::classname(), [
                'mask' => '9-9999-99999-99-9',
            ])
            ?>
        </div>        
        <div class="col-xs-2 col-sm-2 col-md-2">           
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

        <div class="col-xs-2 col-sm-2 col-md-2">            
            <?php
            echo $form->field($model, 'sex')->radioList([
                '1' => 'ชาย',
                '2' => 'หญิง',
            ]);
            ?>
        </div>

        <div class="col-xs-3 col-sm-3 col-md-3">           
            <?=
            $form->field($model, 'birthdath')->widget(DatePicker::className(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-mm-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>    
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'adress')->textarea(['row' => 3]) ?>
        </div>    
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
                    $form->field($model, 'ability')
                    ->checkboxList(app\models\Employees::itemAlias('ability'))
            ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">    
            <?= $form->field($model, 'chw')->textInput() ?>
            <?= $form->field($model, 'amphur')->textInput() ?>
            <?= $form->field($model, 'tumbon')->textInput() ?>          
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'education')->dropDownList([
                'ปริณญาตรี' => 'ปริณญาตรี',
                'ปริณญาโท' => 'ปริณญาโท',
                'สูงกว่าระดับปริณญาโทขึ้นไป' => 'สูงกว่าระดับปริณญาโทขึ้นไป',
                'ปวส/อนุปริณญา' => 'ปวส/อนุปริณญา',
                'มัธยมศึกษา6' => 'มัธยมศึกษา6',
                'มัธยมศึกษา3' => 'มัธยมศึกษา3',
                'ประถมศึกษา' => 'ประถมศึกษา',], ['prompt' => ''])
            ?>
        </div>


        <div class="col-xs-3 col-sm-3 col-md-3">
            <?=
            $form->field($model, 'tel')->widget(\yii\widgets\MaskedInput::classname(), [
                'mask' => '999-999-9999',
            ])
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">            
            <?=
            $form->field($model, 'comein')->widget(DatePicker::className(), [
                'language' => 'th',
                'dateFormat' => 'yyyy-mm-dd',
                'clientOptions' => [
                    'changeMonth' => true,
                    'changeYear' => true,
                ],
                'options' => ['class' => 'form-control'
                ],
            ]);
            ?>
        </div>
    </div>


    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
