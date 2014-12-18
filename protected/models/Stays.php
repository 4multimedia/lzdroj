<?php

	class Stays extends CActiveRecord
	{
		public $date_from;
		public $date_to;
	
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'stays';
		}
		
		public function image($object_id, $limit = false, $action, $width, $height)
		{
			$Criteria = new CDbCriteria();
			$Criteria -> condition = "object_id=:object_id AND type=:type";
			$Criteria -> params = array("object_id" => $object_id, "type" => "stays");
			$Criteria -> limit = $limit;
		
			$Gallery = ObjectsGallery::model()->findAll($Criteria);
			
			$ImagePath = $Gallery[0]->path;
			$ImageExt = end(explode(".", $ImagePath));
			$ImagePathTo = "/files/img/objects_thumbs/".$object_id.".".$ImageExt;
			$Image = Yii::app()->phpThumb->create($ImagePath);
			$Image -> adaptiveResize($width, $height);
			$Image -> save($ImagePathTo);
			
			return '<img src="'.$ImagePathTo.'">';
		}
		
		public function terms($stays_id, $limit = 8, $offset = 0)
		{
			$Criteria = new CDbCriteria();
			$Criteria -> condition = "stays_id=:stays_id AND date_from >= NOW()";
			$Criteria -> params = array("stays_id" => $stays_id);
			$Criteria -> order = "date_from ASC";
			$Criteria -> limit = $limit;
			$Criteria -> offset = $offset * $limit;
			
			$Dates = StaysDates::model()->findAll($Criteria);
			$Stay = Stays::model()->findByPk($stays_id);
			
			if ($Dates)
			{
				for($d = 0; $d < count($Dates); $d++)
				{
					$terms[] = "<a href=\"".Yii::app()->createUrl("turnus-leczniczy/".$Dates[$d]->id."-".$Stay->alias)."\">".$Dates[$d]->date_from." - ".$Dates[$d]->date_to."</a>";
				}
				return implode(" <span>|</span> ", $terms);
			}
			else
			{
				return false;
			}
		}
		
		public function termsPagination($stays_id)
		{
			$Criteria = new CDbCriteria();
			$Criteria -> condition = "stays_id=:stays_id AND date_from >= NOW()";
			$Criteria -> params = array("stays_id" => $stays_id);
			$Criteria -> order = "date_from ASC";
			
			$Count = StaysDates::model()->count($Criteria);
			
			$pages = new CPagination($Count);
			$pages -> pageSize = 8;
			
			$this -> widget('CLinkPager', array('pages' => $pages));

		}
	}