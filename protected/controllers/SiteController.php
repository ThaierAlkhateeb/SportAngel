<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionAjaxSendMessage()
	{
            if(yii::app()->request->isAjaxRequest)
            {
                //VALIDATION
                if(1)
                {
                    $name='=?UTF-8?B?'.base64_encode($_POST['name']).'?=';
                    $subject='=?UTF-8?B?'.base64_encode($_POST['subject']).'?=';
                    $headers="From: $name <{$_POST['email_from']}>\r\n".
                            "Reply-To: {$_POST['email_from']}\r\n".
                            "MIME-Version: 1.0\r\n".
                            "Content-Type: text/plain; charset=UTF-8";

                    if(@mail($_POST['to'],$subject,$_POST['message'],$headers))
                            echo CJSON::encode(array('status'=>'success','message'=>'Sent Successfully'));
            
                    else
                        echo CJSON::encode(array('status'=>'error','message'=>'Sending Faild'));
                        //Yii::app()->user->setFlash('Notsuccess', "email not send");   
                        //echo CHtml::encode(Yii::app()->user->getFlash('Notsuccess'));
                       
                }
                
            }
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionTemplate($name)
        {
            if(yii::app()->request->isAjaxRequest)
            {
                $this->renderPartial($name,array(),false,true);
            }
            else
            {
                $this->renderPartial($name);
            }
        }
}