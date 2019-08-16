<?php



	function Head_Pre(){
	?>	
	<!DOCTYPE html>
	<html>
	<head>
	  <!--Import Google Icon Font-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!--Import materialize.css-->
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	  <!--Let browser know website is optimized for mobile-->
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
	  <title>Cupids</title>
	  
		<style type="text/css">

		</style>
		

	
	</head>	
	


	
	
	<body onload="alertMsg_database(), alertMsg_config()">
	  <!--Import jQuery before materialize.js-->
	  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
		$( document ).ready(function(){

			$('.carousel').carousel();
			$('.carousel.carousel-slider').carousel({fullWidth: false});


			// Initialize collapse button
			$(".button-collapse").sideNav();
			// Initialize collapsible (uncomment the line below if you use the dropdown variation)
			//$('.collapsible').collapsible();
			
			
			$(".button-collapse").sideNav();
			
		})
	</script>
	<?php	
	}
	//end of Head_Pre()
	

	
?>

