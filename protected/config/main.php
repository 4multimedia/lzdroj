<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(
	'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name' => 'Lawendowy zdrój',
	'preload' => array('log', 'form'),
	'language' => 'pl',
	'sourceLanguage' => 'pl',
	
	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
	),
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),
	'components'=>array(
			'config'=>array('class'=>'Config'),
			'access'=>array('class'=>'BackEndAccessModules'),
			'menus'=>array('class'=>'Menus'),
			'languages'=>array('class'=>'Languages'),
			'users'=>array('class'=>'Users'),
			'phpThumb'=>array(
				'class'=>'ext.EPhpThumb.EPhpThumb',
            ),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				//'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				//'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'request'=>array('class'=>'DLanguageHttpRequest'),
		
		
		'viewRenderer'=>array(
			'class'=>'application.extensions.smarty.ESmartyViewRenderer',
			'fileExtension' => '.tpl',
			'pluginsDir' => 'application.smartyPlugins',
    //'configDir' => 'application.smartyConfig',
    //'prefilters' => array(array('MyClass','filterMethod')),
    //'postfilters' => array(),
    //'config'=>array(
    //    'force_compile' => YII_DEBUG,
    //   ... any Smarty object parameter
    //)
),
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=14086165_lzdroj',
			'emulatePrepare' => true,
			'username' => '14086165_lzdroj',
			'password' => 'awiola123',
			'charset' => 'utf8',
			'tablePrefix' => 'demo_',
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
			),
		),
	),


	'params'=>array(
		'adminEmail'=>'pomoc@4multimedia.pl',
		'adminPath'=>'administrator',
		'loginPath'=>'login',
		'resetPath'=>'resetPassword',
		'translatedLanguages'=>array(
            'pl'=>'Polski',
            'en'=>'English',
            'de'=>'Deutsch',
        ),
        'defaultLanguage'=>'pl',
	),
	'behaviors'=>array(
		'onbeginRequest' => array(
			'class' => 'application.components.Onload',
		),
    'runEnd'=>array(
        'class'=>'application.components.WebApplicationEndBehavior',
    ),
),
);