<?php
	
	ini_set('display_errors', '1');
	require("content/function.php");
	
	Head_Pre();
	

?>
	<!--- NavBar --->

	<nav>
		<div class="nav-wrapper">
			<a href="<?php echo Jurl;?>/index.php" class="brand-logo">Cupids</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="<?php echo Jurl;?>/index.php?c=register">register</a></li>
				<li><a href="<?php echo Jurl;?>/index.php?c=login">login<span class="new badge">4</span></a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><div class="user-view">
				  <div class="background">
					<img src="src/images/black.jpg">
				  </div>
				  <a href="#!user"><img class="circle" src="src/images/avator.gif"></a>
				  <a href="#!name"><span class="white-text name">jimschenchen</span></a>
				  <a href="#!email"><span class="white-text email">jimschenchen@gmail.com</span></a>
				</div></li>
				<li><a href="<?php echo Jurl;?>/index.php?c=register">register</a></li>
				<li><a href="<?php echo Jurl;?>/index.php?c=login">login<span class="new badge">4</span></a></li>
			</ul>
		</div>
	</nav>

	
	<!--- SideNav ---><!---
	  <ul id="slide-out" class="side-nav">
		<li><div class="user-view">
		  <div class="background">
			<img src="images/office.jpg">
		  </div>
		  <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
		  <a href="#!name"><span class="white-text name">John Doe</span></a>
		  <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div></li>
		<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		<li><a href="#!">Second Link</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	  </ul>
	  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
	--->

<?php


?>
