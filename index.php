
<?php
include_once "getter.php"; 

$uz = new Getter();
$uz->setUrl('https://booking.uz.gov.ua/ua/');
$uz->setParams('2200001', '2218300', '2018-05-12', '00%3A00', 'train-list');
$url = $uz->createURLwithParams($uz->url,$uz->params);
var_dump($url);
//$content = $uz->getPageContent($url);
//$content = $uz->get_string_between($content, '<table class="train-table">', '</table>');


?>
