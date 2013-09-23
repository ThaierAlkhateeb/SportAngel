<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'ITHorizon CMS',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.modules.admin.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
                'admin'=>array(
                    'defaultController'=>'home',
                    'modules'=>array(
                        'rbam'=>array(
                            'development'=>true,
                            //'initialise'=>true,
                            'rbacManagerRole'=>'admin',
                            'userClass'=>'User',
                            'userIdAttribute'=>'id',
                            'userNameAttribute'=>'username',
                        ),
                        'ycm'=>array(
                            'registerModels'=>array(
                                'application.modules.admin.modules.ycm.models.SaSeason',
                                'application.modules.admin.modules.ycm.models.SaCategory',
                                'application.modules.admin.modules.ycm.models.SaProduct',
                                'application.modules.admin.modules.ycm.models.SaPage',
                            ),
                            'uploadCreate'=>true, // create upload folder automatically
                            'redactorUpload'=>true, // enable Redactor image upload
                        ),
                    ),
                ),
	),
    
        

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			//'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
                 'urlManager'=>array(
                    
			'urlFormat'=>'path',
			'rules'=>array(
                                // REST patterns
                                array('api/getContactFormParameters', 'pattern'=>'api/getContactFormParameters', 'verb'=>'GET'),
                                array('api/list', 'pattern'=>'api/<model:\w+>', 'verb'=>'GET'),
                                array('api/view', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'GET'),
                                // array('api/update', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'PUT'),
                                //  array('api/delete', 'pattern'=>'api/<model:\w+>/<id:\d+>', 'verb'=>'DELETE'),
                                // array('api/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'),
                                // Other controllers
                                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                

			),
		),
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
                 * */
                
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sport_angel',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
            
                'authManager'=>array(
                    'class'=>'CDbAuthManager',
                    'connectionID'=>'db',
                ),
            
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
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
		'adminEmail'=>'webmaster@example.com',
	),
);