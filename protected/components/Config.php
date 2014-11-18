<?php

	class Config extends CApplicationComponent
	{
		public function get($key)
		{
			$sql = "SELECT * FROM config c WHERE `key` = '$key'";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				return false;
			}
			else
			{
				return $this -> type($rows[0]["value"]);
			}
		}
		
		public function group($group)
		{
			$sql = "SELECT * FROM config c WHERE `group` = '$group'";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				return false;
			}
			else
			{
				(object)$array;
				foreach ($rows as $key => $data)
				{
					$array -> $data["key"] = $this -> type($data["value"]);
				}
				return $array;
			}
		}
		
		public function type($value)
		{
			return is_array(json_decode($value, true)) ? json_decode($value) : $value;
		}
	}