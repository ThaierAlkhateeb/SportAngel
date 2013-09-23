<?php

class UserController extends Controller
{
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;
                
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
                        if(!empty($model->password))
                            $model->password = User::generateHash($model->password);
                        $model->signUpDate = time();
                        $model->lastActivationRequest = time();
                        $model->lastSignIn = time();
                        //TEMP
                        $model->activationToken = "kjshadf9324rrkwjdfh";
                        if($model->validate())
                        {
                            if($model->save())
                            {
                                $this->redirect(array('index'));
                            }
                        }
		}
                $this->breadcrumbs=array(
                    yii::t('AdminModule.admin','Users')=>$this->createUrl('index'),
                    yii::t('AdminModule.admin','Create')
                );
		$this->render('form',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
                        if(!empty($model->password))
                        {
                            $model->password = User::generateHash($model->password);
                        }
                        //$myRoles = array();
			if($model->save())
                        {
                            if(isset($_POST['_addanother']))
                                $this->redirect(array('create'));
                            elseif(isset($_POST['_save']))
                                $this->redirect(array('index'));
                        }
		}
                $this->breadcrumbs=array(
                    yii::t('AdminModule.admin','Users')=>$this->createUrl('index'),
                    yii::t('AdminModule.admin','Edit')
                );
                $model->password = '';
		$this->render('form',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                $model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('index',array(
			'model'=>$model,
		));
                
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function beforeAction($action) {
            parent::beforeAction($action);
            if(Yii::app()->user->checkAccess('Admin:User:'.$action->id))
            {
                return true;
            }
            else
                throw new CHttpException(403, 'You are not authorized to perform this action');
        }
}
