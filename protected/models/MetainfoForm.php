<?php

	class MetainfoForm extends CActiveRecord
	{
		public static function model($className = __CLASS__)
		{
			return parent::model($className);
		}
	
		public function tableName()
		{
			return 'metainfo';
		}
		
		public function insert($table, $recordID)
		{
			$command = Yii::app() -> db -> createCommand();
			$command -> insert('metainfo', array(
				'table' => $table,
				'record_id' => $recordID,
				'lang' => 'pl',
				'title' => $_POST["metainfo"]["title"],
				'description' => $_POST["metainfo"]["description"],
				'keywords' => $_POST["metainfo"]["keywords"],
				'author' => $_POST["metainfo"]["author"],
				'robots' => $_POST["metainfo"]["robots"]
			));
		}
		
		public function render($table = false, $recordID = null)
		{
			if ($table AND $recordID)
			{
			
			}
		
			$output .= '
			<fieldset id="fieldset-metainfo" class="fieldset-content fieldset-hide">
				<legend><i class="fa fa-search"></i> Zawartość dla wyszukiwarki <em>SEO / Pozycjnowanie</em></legend>
				<div class="field-group">
					<div class="form-group">
						<label for="inputTitle" class="col-sm-2 control-label">Tytuł strony (title):</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputTitle" name="metainfo[title]">
							<span class="help-block">Tytuł strony nie powinien przekraczać <b>70 znaków</b> (wraz ze spacjami).</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputAlias" class="col-sm-2 control-label">Opis strony (description):</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="inputAlias" name="metainfo[description]"></textarea>
							<span class="help-block">Opis strony nie powinien przekraczać <b>150 znaków</b> (wraz ze spacjami).</span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputAlias" class="col-sm-2 control-label">Słowa kluczowe (keywords):</label>
						<div class="col-sm-10">
							<textarea class="form-control" id="inputAlias" name="metainfo[keywords]"></textarea>
							<span class="help-block">Słowa kluczowe to maksymalnie <b>1000</b> znaków. Pamiętaj: skoncentruj się na <b>10-15</b> słowach najlepiej oddających zawartość Twojej strony i konsekwentnie </span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputTitle" class="col-sm-2 control-label">Autor (author):</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputTitle" name="metainfo[title]">
						</div>
					</div>
					<div class="form-group">
						<label for="inputTitle" class="col-sm-2 control-label">Wyszukiwarki (robots):</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option>Ustawienie globalne (z konfiguracji)</option>
								<option value="index, follow" selected="selected">Indeksuj strony i indeksuj wskazywane przez odsyłacze</option>
								<option value="noindex, follow">Nie indeksuj stron, ale indeksuj wskazywane przez odsyłacze</option>
								<option value="index, nofollow">Indeksuj, nie indeksuj wskazywanych przez odsyłacze</option>
								<option value="noindex, nofollow">Nie indeksuj, nie indeksuj wskazywanych przez odsyłacze</option>
							</select>
						</div>
					</div>
				</div>
			</fieldset>
			';
			return $output;
		}
	}