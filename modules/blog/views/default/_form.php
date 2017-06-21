<?php

use yii\helpers\Html;
use kartik\widgets\DateTimePicker;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\modules\blog\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="posts-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'intro')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'content')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
    <?= // Date Time Picker usage without model
        '<label>Start Date/Time</label>';
    echo DateTimePicker::widget([
        'name' => 'date',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'd-M-Y g:i A',
            'startDate' => '01-Mar-2014 12:00 AM',
            'todayHighlight' => true
        ]
    ]); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
