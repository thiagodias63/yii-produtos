<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "telefone_responsavel".
 *
 * @property string $id_telefone_responsavel
 * @property string $telefone_responsavel
 * @property string $data_do_registro
 * @property string $id_responsavel
 *
 * @property Responsavel $idResponsavel
 */
class TelefoneResponsavel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telefone_responsavel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_do_registro'], 'safe'],
            [['id_responsavel'], 'required'],
            [['id_responsavel'], 'integer'],
            [['telefone_responsavel'], 'string', 'max' => 15],
            [['id_responsavel'], 'exist', 'skipOnError' => true, 'targetClass' => Responsavel::className(), 'targetAttribute' => ['id_responsavel' => 'id_responsavel']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_telefone_responsavel' => 'Id Telefone Responsavel',
            'telefone_responsavel' => 'Telefone Responsavel',
            'data_do_registro' => 'Data Do Registro',
            'id_responsavel' => 'Nome do Responsavel',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdResponsavel()
    {
        return $this->hasOne(Responsavel::className(), ['id_responsavel' => 'id_responsavel']);
    }
}
