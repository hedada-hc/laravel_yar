<?php
include '../yar-master/tests/htdocs/rest.php';
$api = "http://localhost/yar-master/tests/htdocs/testapi.php";
$url = "https://www.taobao.com";
$yar = new Yar_ss;
$db = $yar->tao($api,$url);
echo $db;