<?php

	class ProductsHeaders extends CActiveRecord
	{
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
		
		public function tableName()
		{
			return 'products_headers';
		}
		
		public function findByProductId($product_id)
		{
			$Items = ProductsHeaders::model() -> findAll("product_id=:product_id", array("product_id" => $product_id));
			if ($Items)
			{
				for ($i = 0; $i < count($Items); $i++)
				{
					$array[$Items[$i]->id]["name"] = LanguagesData::model() -> findData($Items[$i]->id, 'products_headers', 1, 'name');
					$array[$Items[$i]->id]["subname"] = LanguagesData::model() -> findData($Items[$i]->id, 'products_headers', 1, 'subname');
				}
				return $array;
			}
			else
			{
				return false;
			}
		}
	}