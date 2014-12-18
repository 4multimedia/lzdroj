<?php

	class Gallery extends CWidget
	{
		public $type;
		public $object_id;
	
		public function init()
		{
			$Criteria = new CDbCriteria();
			$Criteria -> addCondition("`type` = '".$this->type."'", "AND");
			$Criteria -> addCondition("`object_id` = '".$this->object_id."'", "AND");
			
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.fancybox.pack.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/jquery.fancybox-thumbs.js');
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/gallery.js');
			
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/jquery.fancybox.css');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/jquery.fancybox-thumbs.css');
			$Photos = ObjectsGallery::model()->findAll($Criteria);
			
			$this->render('gallery', array(
				'Photos'	=> $Photos
			));
		}
	}