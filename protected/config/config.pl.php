<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'theme' => 'lawendowyzdroj',
		'components'=>array(
			'layouts'=>array('class'=>'Layouts'),
			'urlManager'=>array(
				'class'=>'MyUrlManager',
				'urlFormat'=>'path',
				'showScriptName'=>false,
				'rules'=>array(
					'/'=>'site/index',
					'index'=>'site/index',
					
					'rejestracja'=>'user/registration',
					'logowanie'=>'user/login',
					
					'<language:(pl|en|de)>/noclegi'=>'objects/search',
					'<language:(pl|en|de)>/turnusy-lecznicze'=>'stays/search',
					'wynik-wyszukiwania'=>'objects/search',
					'obiekt/<alias>'=>'objects/view',
					
					'koszyk/dodaj'=>'shop/cartAdd',
					'realizacja-zamowienia'=>'shop/checkout',
					
					'<alias:(biznes)>'=>'category/view',
					'<id:\d+>-<alias>'=>'media/view',
					'<language:\w{2}>/<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<language:\w{2}>/<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<language:\w{2}>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				),
			),
		)
	)
);
