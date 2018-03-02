<?php

namespace backend\controllers;

use Yii;
use backend\models\Model;
use backend\models\Responsavel;
use backend\models\TelefoneResponsavel;
use backend\models\EmailResponsavel;
use backend\models\ClienteEmpresa;
use backend\models\ClienteEmpresaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * ClienteEmpresaController implements the CRUD actions for ClienteEmpresa model.
 */
class ClienteEmpresaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actions()
    {
        return ['addressSearch' => 'yiibr\correios\CepAction',];
    }

    /**
     * Lists all ClienteEmpresa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClienteEmpresaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClienteEmpresa model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ClienteEmpresa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        $model = new ClienteEmpresa();
        $responsavel = new Responsavel();
        $modelsTelefone = [new TelefoneResponsavel];
        $modelsEmail = [new EmailResponsavel];
        if ($model->load(Yii::$app->request->post()) && $responsavel->load(Yii::$app->request->post()))
        {
            $modelsTelefone = Model::createMultiple(TelefoneResponsavel::classname());
            Model::loadMultiple($modelsTelefone, Yii::$app->request->post());

            $modelsEmail = Model::createMultiple(EmailResponsavel::classname());
            Model::loadMultiple($modelsEmail, Yii::$app->request->post());

            $responsavel->id_administradora = 1;
            $responsavel->tipo_cliente = 'a';
            $responsavel->data_do_registro = date('Y-m-d h:m:s');
            //$responsavel->save(false);
            // validate all models
            //$valid = $responsavel->validate();
            //$valid = $model->validate();
            var_dump($modelsTelefone);
            //var_dump($modelsEmail);
            die;
            //if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $responsavel->save(false)) {
                        $model->responsavel_id_responsavel = $responsavel->id_responsavel;
                        $model->data_do_registro = date('Y-m-d h:m:s');
                        $model->save(false);
                        //$valid = Model::validateMultiple($modelsTelefone);
                        //if($valid)
                        foreach ($modelsTelefone as $modelTelefone) {
                            $modelTelefone->id_responsavel = $responsavel->id_responsavel;
                            $modelTelefone->data_do_registro = date('Y-m-d h:m:s');
                            if (!($flag = $modelTelefone->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        //}
                        //$valid = Model::validateMultiple($modelsEmail);
                        foreach ($modelsEmail as $modelEmail) {
                            $modelEmail->id_responsavel = $responsavel->id_responsavel;
                            $modelEmail->data_do_regisrto = date('Y-m-d h:m:s');
                            if (!($flag = $modelEmail->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                }
                catch (Exception $e) {
                    $transaction->rollBack();
                }
            //}
          }
          else {
                return $this->render('create', [
                'model' => $model,
                'responsavel' => $responsavel,
                'modelsTelefone' => (empty($modelsTelefone)) ? [new TelefoneResponsavel] : $modelsTelefone,
                'modelsEmail' => (empty($modelsEmail)) ? [new EmailResponsavel] : $modelsEmail,
            ]);
        }
    }

    /**
     * Updates an existing ClienteEmpresa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $responsavel = Responsavel::findOne($model->responsavel_id_responsavel);
        $responsavel->getTelefoneResponsavels();
        $responsavel->getEmailResponsavels();
        $modelsTelefone = $responsavel->telefoneResponsavels;//new TelefoneResponsavel //Responsavel::getTelefoneResponsavels()
        $modelsEmail = $responsavel->emailResponsavels;//new EmailResponsavel

        if($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
                'model' => $model,
                'responsavel' => $responsavel,
                'modelsTelefone' => (empty($modelsTelefone)) ? [new TelefoneResponsavel] : $modelsTelefone,
                'modelsEmail' => (empty($modelsEmail)) ? [new EmailResponsavel] : $modelsEmail,
            ]);
    }

    /**
     * Deletes an existing ClienteEmpresa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ClienteEmpresa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return ClienteEmpresa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ClienteEmpresa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
