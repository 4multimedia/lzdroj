<?php

	class PagesItems extends CActiveRecord
	{
		public $title;
	
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'pages';
		}
		
		public function relations()
		{
			return array(

			);
		}
		
		public function attributeLabels()
		{
			return array(
				'id' => 'ID',
				'title' => 'Tytuł strony'
			);
		}
		
		public function GetItems()
		{
			$SelectItems = Yii::app() -> db -> createCommand('SELECT * FROM `pages`, `pages_language` WHERE `pages`.`id` = `pages_language`.`page_id` AND `lang` = :lang');
			$SelectItems -> bindValue(':lang', 'pl');
			$DataItems = $SelectItems -> query();
			
			return $DataItems;
		}
	}