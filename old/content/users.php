<?php
	ini_set('display_errors', '1');
	


// --- determination function ---
	if($_REQUEST['f'] == "register"){
		register();
	}else if($_REQUEST['f'] == "login"){
		login();
	}




function register(){
	
	require("../database.php");
	//因为这个页面作为单独页面打开, 所以路径不为根目录
	
	$un = $_POST["username"];
	$ps = $_POST["password"];

	
	$sql = "INSERT INTO cupids_users (username, password)
	VALUES ('" . $un . "' , '". $ps . "')";
 
	if ($conn->query($sql) === TRUE) {
		echo "新记录插入成功";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	 
	$conn->close();
}

function login(){
	
	
	
	
	
	
	
	
}

?>