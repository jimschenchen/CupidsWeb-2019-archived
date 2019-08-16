<?php
	define("Jurl", "http://www.probejfury.com/cupids", true);
	alertMsg_config();


	function alertMsg_config(){
		?>
		<script>
			function alertMsg_config(){
				Materialize.toast('全局静态部署成功', 4000) // 4000 is the duration of the toast
			}
		</script>
		<?php
	}

?>