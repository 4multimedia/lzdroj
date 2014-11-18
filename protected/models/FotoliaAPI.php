<?php

	class FotoliaAPI
	{
		public $api_key = "4KgGtYGEW4DAP9ppJ3jwGsDfQ0jdx2fr";
		public $path_dir = "/printair-pl/new/printair/_cache/json/";
		public $cache_time = 60;
	
		public function cache($hash)
		{
			$path = $this -> path_dir.$hash;
			if (file_exists($path))
			{
				$time = time() - filemtime($path);
				$cache_seconds = $this -> cache_time * 60;
				
				if ($time > $cache_seconds)
				{
					return "remove";
				}
				else
				{
					return "download";
				}
			}
			else
			{
				return "empty";
			}
		}
		
		public function removeCache($hash)
		{
			$path = $this -> path_dir.$hash;
			unlink($path);
		}
		
		public function createCache($hash, $content)
		{
			$path = $this -> path_dir.$hash;
			
			if ($content)
			{
				$fp = fopen($path, "wb");
				fwrite($fp, $content);
				fclose($fp);
			}
		}
		
		public function getCache($hash)
		{
			$path = $this -> path_dir.$hash;
			ob_start();
			require $path;
			return ob_get_clean();
		}
	
		public function search($params = false)
		{
			if ($params)
			{
				$params = explode("&", $params);
				foreach ($params as $key => $param)
				{
					list($field, $value) = explode("=", $param);
					$$field = $value;
				}
			}
			
			$MediaCategory = new MediaCategory;
		
			$url = "http://".$this -> api_key.":@api.fotolia.com/Rest/1/search/getSearchResults?search_parameters%5Blanguage_id%5D=11&";
			if ($cat1_id) { $cat = $cat1_id; $url .= "search_parameters%5Bcat1_id%5D=$cat1_id&"; }
			if ($cat2_id) { $cat = $cat2_id; $url .= "search_parameters%5Bcat2_id%5D=$cat2_id&"; }
			$user_agent = "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)";
			
			$hash = sha1($url).".json";
			$check = $this -> cache($hash);
			if ($check == "empty")
			{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
		   		curl_close($ch);
		   		
				//$this -> createCache($hash, $result);
				$array = json_decode($result, true);
				if ($array["error"])
				{
					
				}
				else
				{
					$this -> createCache($hash, $result);
				}
				
			}
			else if ($check == "remove")
			{
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
		   		curl_close($ch);
		   		
				//$this -> createCache($hash, $result);
				$array = json_decode($result, true);
				if ($array["error"])
				{
					$result = $this -> getCache($hash);
				}
				else
				{
					$this -> removeCache($hash);
					$this -> createCache($hash, $result);
					$MediaCategory -> updateCount($array["nb_results"], $cat);
				}
			}
			else if ($check == "download")
			{
				$result = $this -> getCache($hash);
				$array = json_decode($result, true);
			}
			
			if ($array)
			{
				foreach ($array as $key => $value)
				{
					if (isset($array[$key]["title"]))
					{
						$array[$key]["link"] = $array[$key]["id"]."-".General::ClearLink($array[$key]["title"]);
					}
				}
			}
			
			if ($check == "empty")
			{
				$MediaCategory -> updateCount($array["nb_results"], $cat);
			}

			return $array;
		}
	}

?>