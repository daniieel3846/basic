<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Response';
$this->params['breadcrumbs'][] = $this->title;
$valor = Yii::$app->session->get('id');
?>
<div class="cliente-form">

    <?php
    $articulos = ['Articulo 1' => 'Articulo 1 - $5.000', 'Articulo 2' => 'Articulo 2 - $27.000',  'Articulo 3' => 'Articulo 3 - $83.000'];
    $pagos = ['TC' => 'TC', 'Nequi' => 'Nequi', 'Consignacion Bancaria' => 'Consignacion Bancaria'];
    $form = ActiveForm::begin();
    ?>

    <?= $form->field($model, 'articulo')->dropDownList($articulos, ['prompt' => 'Seleccione Uno', 'required' => true]); ?>

    <?= $form->field($model, 'precio')->textInput(['value' => $model->precio, 'disabled' => true]) ?>

    <?= $form->field($model, 'metodo_pago')->dropDownList($pagos, ['prompt' => 'Seleccione --', 'required' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php if ($mensaje) {
        echo Html::tag('div', Html::encode($mensaje), ['class' => 'alert alert-success']);
    } ?>
</div>