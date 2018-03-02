<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cidade".
 *
 * @property string $id_cidade
 * @property string $nome_cidade
 * @property string $sigla
 * @property string $estado_id_estado
 *
 * @property Estado $estadoIdEstado
 * @property ClienteEmpresa[] $clienteEmpresas
 */
class Cidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cidade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sigla', 'estado_id_estado'], 'required'],
            [['estado_id_estado'], 'integer'],
            [['nome_cidade'], 'string', 'max' => 100],
            [['sigla'], 'string', 'max' => 2],
            [['estado_id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id_estado' => 'id_estado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cidade' => 'Id Cidade',
            'nome_cidade' => 'Nome Cidade',
            'sigla' => 'Sigla',
            'estado_id_estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoIdEstado()
    {
        return $this->hasOne(Estado::className(), ['id_estado' => 'estado_id_estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteEmpresas()
    {
        return $this->hasMany(ClienteEmpresa::className(), ['cidade_id_cidade' => 'id_cidade']);
    }
}
