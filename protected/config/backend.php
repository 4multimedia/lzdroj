<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'theme' => 'classic',
		'components'=>array(
			'layouts'=>array('class'=>'Layouts'),
			'urlManager'=>array(
				'urlFormat'=>'path',
				'showScriptName'=>false,
				'rules'=>array(
					'index' => 'site/index',
					'login' => 'user/login',
					'logout' => 'user/logout',
					'resetPassword' => 'user/resetPassword',
					
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
					'<alias>'=>'page/view',
				),
			),
		)
	)
);
