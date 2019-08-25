<?php
	$un = $_POST["username"];
	$ps = $_POST["password"];

   $arr = array('name' => $un, 'password' => $ps, 'avatar' => 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1566746293383&di=aa76e829989e1b3d2fe9c38f0e26ac15&imgtype=0&src=http%3A%2F%2Fp4.qhimg.com%2Ft017faada6ead77b8e7.jpg');
   echo json_encode($arr);
?>