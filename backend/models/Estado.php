<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property string $id_estado
 * @property string $nome_estado
 * @property string $sigla
 *
 * @property Cidade[] $cidades
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_estado', 'sigla'], 'required'],
            [['nome_estado'], 'string', 'max' => 100],
            [['sigla'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado' => 'Id Estado',
            'nome_estado' => 'Nome Estado',
            'sigla' => 'Sigla',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidades()
    {
        return $this->hasMany(Cidade::className(), ['estado_id_estado' => 'id_estado']);
    }
}
