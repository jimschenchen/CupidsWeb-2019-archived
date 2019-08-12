<?php

	$servername = "localhost";
	$username = "root";
	$password = "060210";
	$dbname = "cupids";
 
	// 创建连接
	$conn = new mysqli($servername, $username, $password, $dbname);
	 
	// 检测连接
	if ($conn->connect_error) {
		die("连接失败: " . $conn->connect_error);
	} 
	alertMsg_database();



// --- ini alert toast ---
	function alertMsg_database(){
		?>
		<script>
			function alertMsg_database(){
				Materialize.toast('数据库连接成功', 4000) // 4000 is the duration of the toast
			}
		</script>
		<?php
	}
	
?>

