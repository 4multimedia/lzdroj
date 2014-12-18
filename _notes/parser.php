<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

	$dbc = @mysql_connect ('localhost', '14086165_fabrykadruku', 'awiola123') OR die ('Brak polaczenia z serwerem MySQL: ' .mysql_error() );
	mysql_select_db ('14086165_fabrykadruku') OR die ('Nie można wybrać bazy danych: ' . mysql_error() );

	$CharacterSql = "SET CHARACTER SET utf8";
	$characterres = mysql_query($CharacterSql);

	$n = mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');

	$url = "http://dobra-drukarnia.pl/index.php?/Segregatory/A4-mechanizm-ringowy";
	
	$f = @fopen($url, "r");
	if ($f)
	{
		$strona = "";
		
		while(!feof($f)) $strona .= fread($f,1024); fclose($f);
		$strona = preg_replace("/\r/", " ", $strona);
		$strona = preg_replace("/\n/", " ", $strona);
		$strona = preg_replace("/\t/", " ", $strona);
		$strona = preg_replace("/  /"," ", $strona);
		$strona = preg_replace("/  /"," ", $strona);
		$strona = preg_replace("/   /"," ", $strona);
		$strona = preg_replace("/   /"," ", $strona);
		$strona = preg_replace("/    /"," ", $strona);
		$strona = preg_replace("/    /"," ", $strona);
		$strona = preg_replace("/   /"," ", $strona);
		$strona = preg_replace("/   /"," ", $strona);
		$strona = preg_replace("/  /"," ", $strona);
		$strona = preg_replace("/  /"," ", $strona);
		$strona = preg_replace("/\"> /","\">", $strona);
		$strona = preg_replace("/ <\//","</", $strona);
	}
				
	//echo $strona;
	
	echo '<hr>';
	
	preg_match_all("/<div style=\"width:100%;\" class=\"zmianatla(.*?)\">(.*?)<div style=\"clear:both;\"><\/div><\/div><\/div> <div style=\"clear:both;\"><\/div><\/div><\/div>/", $strona, $dane);
	
	///print_r($dane[0]);
	
	$output = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $dane[0]);
	$output = preg_replace('/(<[^>]+) class=".*?"/i', '$1', $output);
	
	$output = preg_replace("/<div >/", "<div>", $output);
	$output = preg_replace("/> </", "><", $output);
	
	$output = preg_replace("/<div><div>/", "<div>", $output);
	$output = preg_replace("/<div><div>/", "<div>", $output);
	$output = preg_replace("/<div><div>/", "<div>", $output);
	$output = preg_replace("/<\/div><\/div>/", "</div>", $output);
	$output = preg_replace("/<\/div><\/div>/", "</div>", $output);
	
	$max = 5;
	
	foreach ($output as $key => $value)
	{
		$value = strip_tags($value, '<a><b>');
		$value = preg_replace("/<b>/", "<a href=\"#\">", $value);
		$value = preg_replace("/<\/b>/", "</a>", $value);
		
		preg_match_all("/<a href=\"(.*?)\">(.*?)<\/a>/", $value, $ceny);
		
		//print_r($ceny);
		
		$kolumny = count($ceny[0]);
		$naklad = $ceny[2][0];
		
		for($a = 1; $a < $max; $a++)
		{
			$cena[$a]["price"] = trim(str_replace("zł", "", $ceny[2][$a]));
			$cena[$a]["parameters"] = option($ceny[1][$a]);
		}
		$json = json_encode($cena);
		
		$sql = "INSERT INTO products_circulation SET `product_id` = '2', `circulation` = '$naklad', `prices` = '$json'";
		$res = mysql_query($sql);
		echo $sql.";<br>";
	}
	
	function option($url)
	{
		if ($url == "#") { return false; }
		
		$url = "http://dobra-drukarnia.pl".$url;
		$f = @fopen($url, "r");
		if ($f)
		{
			$strona = "";
			
			while(!feof($f)) $strona .= fread($f,1024); fclose($f);
			$strona = preg_replace("/\r/", " ", $strona);
			$strona = preg_replace("/\n/", " ", $strona);
			$strona = preg_replace("/\t/", " ", $strona);
			$strona = preg_replace("/  /"," ", $strona);
			$strona = preg_replace("/  /"," ", $strona);
			$strona = preg_replace("/   /"," ", $strona);
			$strona = preg_replace("/   /"," ", $strona);
			$strona = preg_replace("/    /"," ", $strona);
			$strona = preg_replace("/    /"," ", $strona);
			$strona = preg_replace("/   /"," ", $strona);
			$strona = preg_replace("/   /"," ", $strona);
			$strona = preg_replace("/  /"," ", $strona);
			$strona = preg_replace("/  /"," ", $strona);
			$strona = preg_replace("/\"> /","\">", $strona);
			$strona = preg_replace("/ <\//","</", $strona);
		}
		//echo $strona;
		
		preg_match_all("/<div class=\"vmAttribChildDetail\" style=\"(.*?)\">(.*?)<\/div> <br style=\"clear:both;\" \/>/", $strona, $dane);
		foreach ($dane[2] as $key => $code)
		{
			$code = strip_tags($code, '<label><option>');
			
			$code = preg_replace('/<label for=\"(.*?)\" rel=\"(.*?)\">/', '<label>', $code);
			
			preg_match('/<label>(.*?)<\/label>/', $code, $label);
			
			$code = preg_replace('/ >/', '>', $code);
			preg_match_all('/<option value=\"(.*?)\" rel=\"(.*?)\">(.*?)<\/option>/', $code, $option);
			
			//print_r($option);
			$from = 0;
			
			$options = array();
			foreach ($option[0] as $key => $val)
			{
				$header = $key + $from;
			
				$options[$key]["value"] = $option[1][$header];
				$options[$key]["price"] = (int)trim($option[2][$header]);
				$options[$key]["name"] = str_replace("(+".$options[$header]["price"].",00 zł)","", $option[3][$header]);
			}
			
			//echo $code;
			//echo '<hr>';
			
			$array[$label[1]] = $options; 
		}
		
		return $array;
	}
	
?>