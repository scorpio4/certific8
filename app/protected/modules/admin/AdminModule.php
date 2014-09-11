<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
                Yii::app()->theme = 'admin'; 
		Yii::app()->name  = 'Certific8';
		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
                $this->layout = 'main';
                Yii::app()->setComponents(array(
			'user'=>array(
                                'allowAutoLogin'=>true,
				'class'=>'CWebUser',
				'loginUrl'=>Yii::app()->createUrl($this->getId()),
			),
		), false);
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
                        Yii::app()->theme = 'admin'; 
			Yii::app()->name  = 'Certific8';
			
			$controller->layout = 'main';
			return true;
		}
		else
			return false;
	}
}
