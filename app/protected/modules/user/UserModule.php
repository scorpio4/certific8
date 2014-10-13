<?php

class UserModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'user.models.*',
			'user.components.*',
		));
                Yii::app()->name  = 'Certific8';
                Yii::app()->theme = 'user'; 
                $this->layout = 'user';
                Yii::app()->setComponents(array(
                        'user'=>array(
                                 // enable cookie-based authentication
                                 'allowAutoLogin'=>true,
                                 'loginUrl' => Yii::app()->createUrl('/signup')
                         ),
                 ));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
                        Yii::app()->theme = 'user'; 
			Yii::app()->name  = 'Certific8';
                        Yii::app()->errorHandler->errorAction = 'user/site/error';
			
			$controller->layout = 'user';
			return true;
		}
		else
			return false;
	}
}
