<?php

class AdminModule extends CWebModule
{
        private $_assetsUrl;
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
                $this->configure(array(
			'preload'=>array('bootstrap'),
			'components'=>array(
				'bootstrap'=>array(
					'class'=>'ext.bootstrap.components.Bootstrap',
					'responsiveCss'=>true,
				),
			),
		));
		$this->preloadComponents();
                
                Yii::app()->setComponents(array(
			'errorHandler'=>array(
				'errorAction'=>'admin/ycm/default/error',
			),
		), true);
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
                    $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
                    $this->layout = 'Default';
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
        
        public function getAssetsUrl()
        {
            if ($this->_assetsUrl === null)
                $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                    Yii::getPathOfAlias('application.modules.admin.assets') );
            return $this->_assetsUrl;
        }
}
