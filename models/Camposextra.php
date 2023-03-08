<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "camposextra".
 *
 * @property int $id
 * @property string|null $articulo
 * @property float|null $precio
 * @property string|null $metodo_pago
 * @property string|null $motivo_negatividad
 * @property int|null $id_externo
 *
 * @property Clientes $externo
 */
class Camposextra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camposextra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
       
        return [
            [['precio'], 'number'],
            [['id_externo'], 'integer'],
            [['articulo'], 'string', 'max' => 100],
            [['metodo_pago'], 'string', 'max' => 50],
            [['motivo_negatividad'], 'string', 'max' => 20],
            [['id_externo'],'default', 'value' => Yii::$app->session->get('id')],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articulo' => 'Articulo',
            'precio' => 'Precio',
            'metodo_pago' => 'Metodo Pago',
            'motivo_negatividad' => 'Motivo Negatividad',
            'id_externo' => 'Id Externo',
        ];
    }

    /**
     * Gets query for [[Externo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExterno()
    {
        return $this->hasOne(Clientes::class, ['id' => 'id_externo']);
    }
}
