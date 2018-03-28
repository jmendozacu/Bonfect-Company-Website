<?php

function get_top($directory){
  $d = dir($directory);
  $items = array(); 
  while (false !== ($entry = $d->read())) {
     array_push($items,$entry);
  }
  $d->close();
  asort($items);
  $top = array_pop($items);
  return $top;
}

$request =  $_GET['request'];
if ($request == "Latest"){

$base = dirname(__FILE__)."/var/log/import_export";

$year = get_top($base);
$month = get_top($base."/".$year);
$day = get_top($base."/".$year."/".$month);
$dest_dir = $base."/".$year."/".$month."/".$day; 
$last_updated = get_top($dest_dir);
 
$filename = $dest_dir."/".$last_updated;
echo nl2br(file_get_contents($filename));

}
?>
