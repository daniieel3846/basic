<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Negatividad';
$this->params['breadcrumbs'][] = $this->title;
$valor = Yii::$app->session->get('id');
?>
<div class="cliente-form">

    <?php
    $Motivos = ['Muy Caro'=>'Muy Caro', 'Se lo piensa mejor'=>'Se lo piensa mejor', 'No me interesa'=>'No me interesa'];
    $form = ActiveForm::begin();
    ?>

    <?= $form->field($model, 'motivo_negatividad')->dropDownList($Motivos, ['prompt' => 'Seleccione --','required' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php if ($mensaje) {
        echo Html::tag('div', Html::encode($mensaje), ['class' => 'alert alert-success']);
    } ?>
</div>