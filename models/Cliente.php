<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $cedula
 * @property string $nombre
 * @property string $telefono
 * @property string $email
 * @property string $genero
 */
class Cliente extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cedula', 'nombre', 'telefono', 'email', 'genero'], 'required'],
            [['cedula', 'telefono'], 'number'],
            [['nombre'], 'string', 'max' => 100],
            [['email'], 'email'],
            [['genero'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'genero' => 'Genero',
        ];
    }
}
