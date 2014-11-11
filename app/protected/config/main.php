<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Certific8',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'user',
                'admin',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
                         'class' => 'WebUser',
		),
                'bitly' => array(
                        'class' => 'application.extensions.bitly.VGBitly',
                        'login' => 'o_2vj8uf1e6v', // login name
                        'apiKey' => 'R_1d1c0c31b6ad45cd903b5aafe8b165c3', // apikey 
                        'format' => 'json', // default format of the response this can be either xml, json (some callbacks support txt as well)
                ),
            
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
                        'urlFormat'=>'path',
                        'showScriptName'=>false,
			'rules'=>array(
                                '/user'=>'user/user/update',
                                '/'=>'user/user/index',
                                '/profile'=>'user/profile/update',
                                '/profile/<id>'=>'user/profile/update',
                                '/listprofile'=>'user/profile/index',
                                '/profileview/<id>'=>'user/profile/view',
                                '/vcard/<vid>/profile/<pid>'=>'user/profile/vcard',
                                '/changepassword'=>'user/user/changePassword',
                                '/profilecopy/<id>'=>'user/profile/profileCopy',
                                '/verify/<id>'=>'user/user/verify',
                                '/responsebitly'=>'user/user/responsebitly',
                                '/admin'=>'admin/site/login',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
                'clientScript'=>array(
                    'packages'=>array(
                         'jquery'=>array(
                             'baseUrl'=>Yii::getPathOfAlias('webroot') . 'js/',
                             'js'=>array('jquery-1.11.1.min.js')
                          )                                       
                     )
                ),
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=certific8',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'tablePrefix' => 'c8_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'admin/site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'admin@certific8.in',
	),
);