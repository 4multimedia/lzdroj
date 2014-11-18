<?php

	class ProductsFormCms extends CFormModel
	{
		public $name;
		public $alias;
		public $parent_id;
		
		public function attributeLabels()
		{
			return array(	
				'name'		=> 'Nazwa produktu',
				'alias'		=> 'Alias',
				'parent_id'	=> 'Produkt nadrzędny',
			);
		}
		
		public function rules()
		{
			return array(
				array('name, alias, parent_id', 'required'),
			);
		}
		
	}