<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var common\models\GroupStudent $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="group-student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    echo $form->field($model, 'student_id')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map($model->students , 'id' , 'fullName'),
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php
    echo $form->field($model, 'group_id')->widget(Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map($model->groups , 'id' , 'title'),
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn-fill-md radius-4 text-light bg-light-sea-green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
