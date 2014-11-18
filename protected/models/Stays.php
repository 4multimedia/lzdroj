<?php

	class Stays extends CActiveRecord
	{
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
			$Criteria -> condition = "object_id=:object_id";
			$Criteria -> params = array("object_id" => $object_id);
			$Criteria -> limit = $limit;
		
			$Gallery = ObjectsGallery::model()->findAll($Criteria);
			
			$ImagePath = $Gallery[0]->path;
			$ImageExt = end(explode(".", $ImagePath));
			$ImagePathTo = "/files/img/objects_thumbs/".$object_id.".".$ImageExt;
			$Image = Yii::app()->phpThumb->create($ImagePath);
			$Image -> resize($width, $height);
			$Image -> save($ImagePathTo);
			
			return '<img src="'.$ImagePathTo.'">';
		}
	}