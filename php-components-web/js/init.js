(function($){
  $(function(){
    $('.sidenav').sidenav();


    $("#jim").click(function(){
		$.post("/try/ajax/demo_test_post.php",
		{
			name:"菜鸟教程",
			url:"http://www.runoob.com"
		},
			function(data,status){
			alert("数据: \n" + data + "\n状态: " + status);
		});
	});

  }); // end of document ready
})(jQuery); // end of jQuery name space
