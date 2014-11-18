<?php

	class Products extends CActiveRecord
	{
		public $name;
		public $alias;
	
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'products';
		}
		
		public function getRoot()
		{
			$Items = Products::model()->search();
			return $Items;
		}
		
		public function search($parent_id = 0)
		{
			$Items = Products::model()->findAll(array(
				select => "
				id,
				(SELECT `value` FROM `languages_data` WHERE `record_id` = `t`.`id` AND `table` = 'products' AND `language_id` = '1' AND `column` = 'name') as `name`,
				(SELECT `value` FROM `languages_data` WHERE `record_id` = `t`.`id` AND `table` = 'products' AND `language_id` = '1' AND `column` = 'alias') as `alias`",
				'condition' => 'parent_id=:parent_id',
				'params' => array(":parent_id" => $parent_id)
			));

			return $Items;
		}
	}