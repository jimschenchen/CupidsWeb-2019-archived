<?php

?>
	<h2 align="center">Login</h2>
	<div class="row">
		<form class="col s12" name = "register" method = "post" action = "register.php">
			<div class="container">
				<div class="row">
					<div class="input-field col s12">
					  <input placeholder="Placeholder" id="username" name = "username" type="text" class="validate">
					  <label for="username">username</label>
					</div>
				</div>
				
				<div class="row">
					<div class="input-field col s12">
					  <input id="password" type="text" class="validate" name = "password">
					  <label for="password">password</label>
					</div>
				</div>
			
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
		</form>
	</div>
	
<?php

?>