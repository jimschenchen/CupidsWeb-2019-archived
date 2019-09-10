<?php
	header("Content-type:text/html;charset=utf-8");  
	
	$un = $_POST["username"];
	$ps = $_POST["password"];
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
	 
	$sql = "SELECT * FROM user_info where username='" . $un . "'";
	$result = mysqli_query($conn, $sql);
	
	$res = array();
	
	while($row = mysqli_fetch_array($result)){
		$res[] = $row;
	}
	// 输出数据
	if(count($res)>0){
		if(password_verify($ps,$res[0]["password"])){
			$data = array('name' => $res[0]["username"], 'avatar' => $res[0]["avatar"], 'login' => 0);
			echo json_format(0, $data, '登录成功');
		}else{
			$data = array('name' => $res[0]["username"], 'avatar' => $res[0]["avatar"], 'login' => -1);
			echo json_format(-2, $data, '密码错误');
		}
	}else{
		$data = array('name' => '', 'avatar' => '', 'login' => -1);
		echo json_format(-1, $data, '未找到该用户');
	}
 
	$conn->close();
	
	
	function json_format ($ret, $data, $msg) {
		$data_all = array('ret' => $ret, 'data' => $data, 'msg' =>$msg);
		return json_encode($data_all);
	}
?>