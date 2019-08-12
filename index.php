<!---
	author: jimschenchen (jimschenchen@gmail.com)
	

--->
<?php
//+++setup+++

ini_set('display_errors', '1');

//---function---
require("function.php");

//---Database---
require("database.php");

//---config---
require("config.php");
//---lang---


//---user---


//---content_index_determination---
if(empty($_REQUEST['c'])){
	$c = "";
}else{
	$c = $_REQUEST['c'];
}

?>

<?php
//+++content+++


//---hearder---
require("content/header.php");



//---page---

if($c == "register"){
	require("content/register.php");
}else if($c == "login"){
	require("content/login.php");
}else if($c == "page"){
	
}else{
	require("content/index.php");
}




//---footer---
require("content/footer.php");
?>