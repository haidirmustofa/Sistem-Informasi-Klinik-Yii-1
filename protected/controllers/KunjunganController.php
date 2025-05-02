<?php

class KunjunganController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function beforeAction($action)
	{
		$this->allowRoles(['admin', 'dokter']);
		return parent::beforeAction($action);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index', 'view'),
				'users' => array('*'),
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('create', 'update'),
				'users' => array('@'),
			),
			array(
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Kunjungan;

		if (isset($_POST['Kunjungan'])) {
			$model->attributes = $_POST['Kunjungan'];
			$model->tanggal_kunjungan = date('Y-m-d H:i:s');

			if ($model->save()) {
				$this->redirect(array('admin'));
			}
		}

		$this->render('create', array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Kunjungan'])) {
			$model->attributes = $_POST['Kunjungan'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->id));
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('Kunjungan');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Kunjungan('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Kunjungan']))
			$model->attributes = $_GET['Kunjungan'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kunjungan the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = Kunjungan::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kunjungan $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'kunjungan-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionKunjunganHariIni()
	{
		$dataProvider = new CActiveDataProvider('Kunjungan', array(
			'criteria' => array(
				'condition' => 'DATE(tanggal_kunjungan) = CURDATE() AND id_dokter = :id_dokter',
				'params' => [':id_dokter' => Yii::app()->user->id], // asumsi id pegawai = id user
			)
		));

		$this->render('kunjunganHariIni', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionInput($id)
	{
		$model = $this->loadModel($id);
		$tindakan = new KunjunganTindakan;
		$obat = new KunjunganObat;

		if (isset($_POST['KunjunganTindakan']) && isset($_POST['KunjunganObat'])) {
			$tindakan->attributes = $_POST['KunjunganTindakan'];
			$obat->attributes = $_POST['KunjunganObat'];
			$tindakan->id_kunjungan = $model->id;
			$obat->id_kunjungan = $model->id;

			if ($tindakan->save() && $obat->save()) {
				$this->redirect(array('kunjunganHariIni'));
			}
		}

		$this->render('input', array(
			'model' => $model,
			'tindakan' => $tindakan,
			'obat' => $obat,
		));
	}
}
