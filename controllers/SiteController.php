<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Cliente;
use app\models\Camposextra;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Cliente;
        //Enviar info y validar
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $valorRespuesta = ("Su registro fue guardado");
            return $this->render('compra', ['mensaje' => $valorRespuesta, 'model' => $model]);
        }

        return $this->render('index', ['mensaje' => "", 'model' => $model]);
    }

    public function actionResponse()
    {
        $precios = ['Articulo 1' => 5000, 'Articulo 2' => 27000,  'Articulo 3' => 83000];
        $model = new Camposextra;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->precio = $precios[$model->articulo];
            if ($model->save()) {
                $valorRespuesta = ("Compra registrada");
                return $this->render('response', ['mensaje' => $valorRespuesta, 'model' => $model]);
            }
        }
        return $this->render('response', ['mensaje' => "", 'model' => $model]);
    }
    public function actionNegatividad()
    {
        $model = new Camposextra;
        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->save()) {
            $valorRespuesta = ("Respuesta registrada");
            return $this->render('negatividad', ['mensaje' => $valorRespuesta, 'model' => $model]);
        }
        return $this->render('negatividad', ['mensaje' => "", 'model' => $model]);
    }
}
