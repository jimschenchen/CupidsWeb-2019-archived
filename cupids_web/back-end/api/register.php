<?php
	header("Content-type:text/html;charset=utf-8");  
	
	$un = $_POST["username"];
	$password = $_POST["password"];
	$ps = password_hash($password, PASSWORD_BCRYPT);
	$avatar = 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1566746293383&di=aa76e829989e1b3d2fe9c38f0e26ac15&imgtype=0&src=http%3A%2F%2Fp4.qhimg.com%2Ft017faada6ead77b8e7.jpg';
	
	
	//数据库信息
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cupidsweb";
	

	
	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	// 检测连接
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	} 
	 
	$sql = "INSERT INTO user_info (username, password, avatar)
	VALUES ('" . $un . "', '" . $ps . "', '" . $avatar . "')";
	 
	if ($conn->query($sql) === TRUE) {
		$data = array('name' => $un, 'password' => $ps, 'avatar' => $avatar);
		$ret = 0;
		$data_all = array('ret' => $ret, 'data' => $data);
		echo json_encode($data_all);
	} else {
		$data = '';
		$ret = -1;
		$data_all = array('ret' => $ret, 'data' => $data);
		echo json_encode($data_all);
	}
	 
	$conn->close();
?>