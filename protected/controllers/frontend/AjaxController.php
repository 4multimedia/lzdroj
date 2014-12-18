<?php

	class AjaxController extends Controller
	{
		public function actionGetTerms()
		{
			echo Stays::model()->terms($_POST["id"], 8, $_POST["offset"]);
		}
		
		public function actionGetDescriptionItems()
		{
			echo LanguagesData::model() -> findData($_POST["id"], 'descriptions_items', 1, 'description');
		}
	}
?>