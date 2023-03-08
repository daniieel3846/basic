<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'FORMULARIO';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Formulario</h1>
    </div>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Siguiente', ['class' => 'btn btn-success mb-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php if ($mensaje) {
    echo Html::tag('div', Html::encode($mensaje), ['class' => 'alert alert-danger']);
} ?>