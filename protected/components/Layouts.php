<?php

	class Layouts extends CApplicationComponent
	{
		public function get($section)
		{
			$sql = "SELECT * FROM layouts l WHERE `section` = '$section'";
			$rows = Yii::app()->db->createCommand($sql)->queryAll();
			$count = count($rows);
			
			if ($count == 0)
			{
				return $this -> getDefault();
			}
			else
			{
				if ($rows[0]["default"] == 1)
				{
					return $this -> getDefault();
				}
				else
				{
					$array["default"] = $rows[0]["default"];
					$array["columns"] = $rows[0]["columns"];
					$array["widgets"] = json_decode($rows[0]["widgets"], true);
					
					return $array;
				}
			}
		}
		
		public function getDefault()
		{
			$array["columns"] = 2;
			
			return $array;
		}
	}