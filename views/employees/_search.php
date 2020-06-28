<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'prename') ?>

    <?= $form->field($model, 'fname') ?>

    <?= $form->field($model, 'lname') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthdath') ?>

    <?php // echo $form->field($model, 'adress') ?>

    <?php // echo $form->field($model, 'tumbon') ?>

    <?php // echo $form->field($model, 'amphur') ?>

    <?php // echo $form->field($model, 'chw') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'ability') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'comein') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
