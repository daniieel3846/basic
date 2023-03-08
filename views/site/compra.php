<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'Compra';
$this->params['breadcrumbs'][] = $this->title;
$idCliente = $model->id;
Yii::$app->session->set('id', $idCliente);
$valor = Yii::$app->session->get('id');
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">COMPRA - <?php echo 'Cliente ', $valor?></h1>
    </div>
    <?php if ($mensaje) {
        echo Html::tag('div', Html::encode($mensaje), ['class'=> 'alert alert-success']);
    }?>
    <h2>¿Desea realizar una compra?</h2>
   
    <div class="form-group">
        <?= Html::a('Si', ['response'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('No', ['negatividad'], ['class' => 'btn btn-success']) ?>
    </div>


   
</div>

