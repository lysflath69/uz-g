<?php

class Getter{
	public $url = '';
	public $params = array(
		'from' => '',
		'to' => '',
		'date' => '',
		'time' => '',
		'url' => ''
	);

	function setUrl($url){
		$this->url = $url;
	}

	function getUrl(){
		return $this->url;
	}

	function setParams($from, $to, $date, $time, $url){
		$this->params['from'] = $from;
		$this->params['to'] = $to;
		$this->params['date'] = $date;
		$this->params['time'] = $time;
		$this->params['url'] = $url;
	}

	function getParams(){
		return $this->params;
	}

	function createURLwithParams($url, $params){
		$urlWithParams = $url.'?';
		foreach($params as $key => $value){
			if($key != key($params)){
				$urlWithParams .= '&'.$key.'='.$value;
			}else{
				$urlWithParams .= $key.'='.$value;
			}
		}
		return $urlWithParams;
	}

	function getPageContent($urlWithParams){
		$content = file_get_contents($urlWithParams);
		return $content;
	}

	function get_string_between($string, $start, $end){
	    $string = ' ' . $string;
	    $ini = strpos($string, $start);
	    if ($ini == 0) return '';
	    $ini += strlen($start);
	    $len = strpos($string, $end, $ini) - $ini;
	    return substr($string, $ini, $len);
	}
}


?>