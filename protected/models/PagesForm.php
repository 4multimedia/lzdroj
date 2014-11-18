<?php

	class PagesForm extends CActiveRecord
	{
		public $title;
		public $alias;
		public $description;
	
		public static function model($className = __CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'pages';
		}
		
		public function insert()
		{
			$command = Yii::app() -> db -> createCommand();
			$command -> insert('pages', array(
				'active' => '1',
				'created' => date("Y-m-d H:i:s")
			));
			
			$pageID = Yii::app() -> db -> getLastInsertID();
			
			$command -> insert('pages_language', array(
				'page_id' => $pageID,
				'title' => $_POST["PagesForm"]["title"],
				'alias' => $_POST["PagesForm"]["alias"],
				'description' => $_POST["PagesForm"]["description"],
				'lang' => 'pl'
			));
			
			return $pageID;
		}
		
		public function attributeLabels()
		{
			return array(
				'title' => 'Tytuł strony',
				'alias' => 'Alias strony',
				'description' => 'Opis strony'
			);
		}
		
		public function rules()
		{
			return array(
            array('title, alias, description', 'required'),
            //array('password', 'authenticate'),
			);
		}
	}