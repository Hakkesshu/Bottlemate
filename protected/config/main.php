<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),
  
  // preloading the bootstrap component
  'preload'=>array('bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
    'application.modules.rights.*', // for rights
    'application.modules.rights.components.*',
	),

	'modules'=>array(
    'rights'=>array(
      'superuserName'=>'admin', // Name of the role with super user privileges. 
      'authenticatedName'=>'Authenticated', // Name of the authenticated user role. 
      'userIdColumn'=>'userId', // Name of the user id column in the database. 
      'userNameColumn'=>'userName', // Name of the user name column in the database. 
      'enableBizRule'=>true, // Whether to enable authorization item business rules. 
      'enableBizRuleData'=>false, // Whether to enable data for business rules. 
      'displayDescription'=>true, // Whether to use item description instead of name. 
      'flashSuccessKey'=>'RightsSuccess', // Key to use for setting success flash messages. 
      'flashErrorKey'=>'RightsError', // Key to use for setting error flash messages. 
      //'install'=>true, // Whether to install rights. 
      'baseUrl'=>'/rights', // Base URL for Rights. Change if module is nested. 
      'layout'=>'rights.views.layouts.main', // Layout to use for displaying Rights. 
      'appLayout'=>'application.views.layouts.main', // Application layout. 
      'cssFile'=>'rights.css', // Style sheet file to use for Rights. 
      'install'=>false, // Whether to enable installer. 
      'debug'=>false, // Whether to enable debug mode.    
    ),  
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
      'generatorPaths'=>array('bootstrap.gii',),
			'class'=>'system.gii.GiiModule',
			'password'=>'bottlemate',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
    'bootstrap'=>array(
      'class'=>'ext.bootstrap.components.Bootstrap', // 
    ),
		'user'=>array(
      // allows super users access implicity
      'class'=>'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
    'authManager'=>array(
      'class'=>'RDbAuthManager', // provides support authorization item sorting
    ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/bottlemate.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=bottlemate',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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