<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "administradora".
 *
 * @property integer $id_administradora
 * @property string $nome_responsavel_administradora
 * @property string $nome_administradora
 * @property string $telefone_administradora
 * @property string $email_administradora
 * @property integer $ativa
 *
 * @property Responsavel[] $responsavels
 */
class Administradora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administradora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_administradora'], 'required'],
            [['ativa'], 'integer'],
            [['nome_responsavel_administradora'], 'string', 'max' => 70],
            [['nome_administradora'], 'string', 'max' => 130],
            [['telefone_administradora'], 'string', 'max' => 15],
            [['email_administradora'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_administradora' => 'Id Administradora',
            'nome_responsavel_administradora' => 'Nome Responsavel Administradora',
            'nome_administradora' => 'Nome Administradora',
            'telefone_administradora' => 'Telefone Administradora',
            'email_administradora' => 'Email Administradora',
            'ativa' => 'Ativa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsavels()
    {
        return $this->hasMany(Responsavel::className(), ['id_administradora' => 'id_administradora']);
    }
}
