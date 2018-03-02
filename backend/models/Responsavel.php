<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "responsavel".
 *
 * @property string $id_responsavel
 * @property string $nome_responsavel
 * @property string $tipo_cliente
 * @property string $senha
 * @property integer $tipo_contrato
 * @property string $forma_de_conhecimento
 * @property string $data_do_registro
 * @property string $id_administradora
 *
 * @property ClienteEmpresa[] $clienteEmpresas
 * @property EmailResponsavel[] $emailResponsavels
 * @property Administradora $idAdministradora
 * @property TelefoneResponsavel[] $telefoneResponsavels
 */
class Responsavel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'responsavel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome_responsavel', 'tipo_cliente', 'id_administradora'], 'required'],
            [['tipo_contrato', 'id_administradora'], 'integer'],
            [['data_do_registro'], 'safe'],
            [['nome_responsavel'], 'string', 'max' => 200],
            [['tipo_cliente'], 'string', 'max' => 30],
            [['senha'], 'string', 'max' => 24],
            [['forma_de_conhecimento'], 'string', 'max' => 20],
            [['id_administradora'], 'exist', 'skipOnError' => true, 'targetClass' => Administradora::className(), 'targetAttribute' => ['id_administradora' => 'id_administradora']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_responsavel' => 'Id Responsavel',
            'nome_responsavel' => 'Nome Responsavel',
            'tipo_cliente' => 'Tipo Cliente',
            'senha' => 'Senha',
            'tipo_contrato' => 'Tipo Contrato',
            'forma_de_conhecimento' => 'Forma De Conhecimento',
            'data_do_registro' => 'Data Do Registro',
            'id_administradora' => 'Nome da Administradora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteEmpresas()
    {
        return $this->hasMany(ClienteEmpresa::className(), ['responsavel_id_responsavel' => 'id_responsavel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmailResponsavels()
    {
        return $this->hasMany(EmailResponsavel::className(), ['id_responsavel' => 'id_responsavel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAdministradora()
    {
        return $this->hasOne(Administradora::className(), ['id_administradora' => 'id_administradora']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefoneResponsavels()
    {
        return $this->hasMany(TelefoneResponsavel::className(), ['id_responsavel' => 'id_responsavel']);
    }
}
