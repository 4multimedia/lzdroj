<?php

	class LanguagesData extends CActiveRecord
	{
		public $name;
		public $alias;
	
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'languages_data';
		}
		
		public function saveData($record_id, $table, $language_id, $column, $value)
		{
			$count = LanguagesData::model() -> count("`record_id`=:record_id AND `table`=:table AND `language_id`=:language_id AND `column`=:column", array(":record_id" => $record_id, ":table" => $table, ":language_id" => $language_id, ":column" => $column));
		
			if ($count == 0)
			{
				$data = new LanguagesData;
			}
			else
			{
				$Post = LanguagesData::model() -> find("`record_id`=:record_id AND `table`=:table AND `language_id`=:language_id AND `column`=:column", array(":record_id" => $record_id, ":table" => $table, ":language_id" => $language_id, ":column" => $column));
				$LanguagesDataID = $Post -> id;
				$data = LanguagesData::model()->findByPk($LanguagesDataID);
			}
			$data -> record_id = $record_id;
			$data -> table = $table;
			$data -> language_id = $language_id;
			$data -> column = $column;
			$data -> value = trim($value);
			$data -> save();
		}
		
		public function findData($record_id, $table, $language_id, $column, $compare = "record_id", $value = "value")
		{
			$data = LanguagesData::model()->find("`$compare`=:$compare AND `table`=:table AND `language_id`=:language_id AND `column`=:column", array(":$compare" => $record_id, ":table" => $table, ":language_id" => $language_id, ":column" => $column));
			return $data -> $value;
		}
	}
	
?>