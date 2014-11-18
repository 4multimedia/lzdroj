<?php

	class MediaCategory extends CActiveRecord
	{
		public $name;
		public $alias;
	
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'categories';
		}
		
		public function info($params)
		{
			$items = $this -> search($params);
			$count = count($items);
			
			if ($count == "" OR $count == 0)
			{
				return false;
			}
			else if ($count > 1)
			{
				foreach($items->getData() as $record)
				{
					$id = $record -> id;
					$array[$id]["id"] = $id;
					$array[$id]["fotolia_id"] = $record -> fotolia_id;
					$array[$id]["name"] = $record -> name;
					$array[$id]["alias"] = $record -> alias;
					$array[$id]["count"] = $record -> count;
				}
			}
			else
			{
				foreach($items->getData() as $record)
				{
					$array["id"] = $record -> id;
					$array["fotolia_id"] = $record -> fotolia_id;
					$array["name"] = $record -> name;
					$array["alias"] = $record -> alias;
					$array["count"] = $record -> count;
				}
			}
			
			return $array;
		}
		
		public function updateCount($count, $fotolia_id)
		{
			Yii::app()->db
    		->createCommand("UPDATE categories SET count = '$count' WHERE fotolia_id=:fotolia_id")
    		->bindValues(array(':fotolia_id' => $fotolia_id))
    		->execute();
		}
		
		public function search($params = false)
		{
			if ($params)
			{
				$params = explode("&", $params);
				foreach ($params as $key => $param)
				{
					list($field, $value) = explode("=", $param);
					$$field = $value;
				}
			}
			
			$language = Yii::app() -> language;
			if (!$type) { $type = 0; }
			
			$condition = "`categories_language`.`lang` = '$language'";
			if ($type) { $condition .= " AND `type_id` = '$type'"; }
			if ($alias) { $condition .= " AND alias = '$alias'"; }
			if ($parent_id) { $condition .= " AND parent_id = '$parent_id'"; }
			
			$rows= new CActiveDataProvider($this, array(
				'criteria' => array(
					'select' => array('categories.id', 'fotolia_id', 'name', 'alias', 'count'),
					'alias' => 'categories',
					'join' => "INNER JOIN `categories_language` ON `categories`.`id` = `categories_language`.`category_id`",
					'condition' => $condition,
    			)
			));
			
			return $rows;
		}
	}