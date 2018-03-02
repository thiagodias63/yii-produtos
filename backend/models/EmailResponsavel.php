<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "email_responsavel".
 *
 * @property string $id_email_responsavel
 * @property string $email_responsavel
 * @property string $id_responsavel
 * @property string $data_do_regisrto
 *
 * @property Responsavel $idResponsavel
 */
class EmailResponsavel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email_responsavel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_responsavel'], 'required'],
            [['id_responsavel'], 'integer'],
            [['data_do_regisrto'], 'safe'],
            [['email_responsavel'], 'string', 'max' => 100],
            ['email_responsavel', 'trim'],
            ['email_responsavel', 'email','message'=>'Não é um e-mail valido'],
            ['email_responsavel', 'required','message'=>'Precisamos do e-mail para validar o usuário'],
            [['id_responsavel'], 'exist', 'skipOnError' => true, 'targetClass' => Responsavel::className(), 'targetAttribute' => ['id_responsavel' => 'id_responsavel']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_email_responsavel' => 'Id Email Responsavel',
            'email_responsavel' => 'Email Responsavel',
            'id_responsavel' => 'Nome do Responsavel',
            'data_do_regisrto' => 'Data Do Regisrto',
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
