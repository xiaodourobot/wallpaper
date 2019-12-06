<?php
$url = $_GET["url"];
//$url = str_replace("http:/","http://",$url); 
$dir = pathinfo($url);
$host = $dir['dirname'];
$refer = $host.'/';
$ch = curl_init($url);
curl_setopt ($ch, CURLOPT_REFERER, $refer);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//Activation can modify the page
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
$data = curl_exec($ch);
curl_close($ch);
header("Content-type: image/jpeg");//Code to support jpeg, need to modify to support other image formats
print( $data );
