<?php
$proxy = new SoapClient('http://www.bonfect.com.au/api/v2_soap/?wsdl'); // TODO : change url
$sessionId = $proxy->login('test', 'bonfect2017'); // TODO : change login and pwd if necessary

$result = $proxy->catalogCategoryTree($sessionId);
var_dump($result)
?>
