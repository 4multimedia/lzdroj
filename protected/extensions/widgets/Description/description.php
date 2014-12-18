<?php

	class Description extends CWidget
	{
		public $type;
		public $object_id;
		public $item;
		
		public function init()
		{
			Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/files/js/description.js');
			Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/files/css/description.css');
		
			$Criteria = new CDbCriteria();
			$Criteria -> addCondition("`type` = '".$this->type."'", "AND");
			$Criteria -> addCondition("`object_id` = '".$this->object_id."'", "AND");
		
			$Groups = DescriptionsGroup::model()->findAll($Criteria);
		
			$this->render('description', array(
				'Groups' 	=> $Groups,
				'Item'		=> $this -> item,
			));
		}
	}