<?php

class MustacheController extends Controller
{
	public function actionIndex()
	{
            $profile = new Profile;
            spl_autoload_unregister(array('YiiBase','autoload'));
            Yii::import('application.vendor.mustache.*');
            require_once('src/Mustache/Autoloader.php');
            Mustache_Autoloader::register();
            
            $m = new Mustache_Engine();
            echo $m->render('Hello, {{planet}}!', array('planet' => 'World')); // "Hello,
            
            spl_autoload_register(array('YiiBase', 'autoload'));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}