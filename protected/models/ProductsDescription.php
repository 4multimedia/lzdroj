<?php

	class ProductsDescription extends CActiveRecord
	{
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'products_description';
		}
		
		public function findByProductId($product_id)
		{
			$Items = ProductsDescription::model() -> findAll("product_id=:product_id", array("product_id" => $product_id));
			if ($Items)
			{
				for ($i = 0; $i < count($Items); $i++)
				{
					$array[$Items[$i]->id]["name"] = LanguagesData::model() -> findData($Items[$i]->id, 'products_description', 1, 'name');
					$array[$Items[$i]->id]["descript"] = LanguagesData::model() -> findData($Items[$i]->id, 'products_description', 1, 'descript');
				}
				return $array;
			}
			else
			{
				return false;
			}
		}
	}