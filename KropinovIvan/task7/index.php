
<?php
	
	include ("dbconnect.php");
?>

<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-Control" content="no-cache" />
<script type="text/javascript" src="jquery.js"></script>
</head>

<body>

<h1>Guest book</h1>

<!-- Контейнер для динамической загрузки данныч -->	
<div id="messages">

</div>
	
<br>
<h3>Add message</h3>
<!-- форма отправки сообщения -->

<!-- проверка заполнения формы -->
<script>

</script>

<!-- код формы -->
<form id="myForm">
<table border="0">
	<tr>
		<td width="160">
			Username:
		</td>
		<td>
			<input id="username" name="username" style="width: 300px;">
		</td>
	</tr>
	<tr>
		<td width="160" valign="top">
			Message:
		</td>
		<td>
			<textarea id="msg" name="msg" style="width: 300px;"></textarea>
		</td>
	</tr>		
	<tr>
		<td width="160">
			&nbsp;
		</td>
		<td>
			<input id="btn" type="submit" value="Send message">
		</td>
	</tr>
</table>
</form>

<script>

	function splash()
	{
		if (document.myForm.username.value  =='')
			{
				alert ("Fill Username field!");
				return false;	
			}
			
		if (document.myForm.msg.value  =='')
			{
				alert ("Fill message field!");
				return false;	
			}
		
		return true;   
	}

	// загрузка сообщений из БД в контейнер messages
	function show_messages()
	{
		$.ajax({
			url: "show.php",
			cache: false,
			success: function(html){
				$("#messages").html(html);
			}
		});
	}
		
	$(document).ready(function(){

		show_messages();
		
		// контроль и отправка данных на сервер в фоновом режиме при нажатии на кнопку "отправить сообщение"
		$("#myForm").submit(function(){
		
			var name = $("#username").val();
			var msg  = $("#msg").val();
			if (name =='')
			{
				alert ("Fill Usename field!");
				return false;
			}
			if (msg =='')
			{
				alert ("Fill message field!");
				return false;
			}

			$.ajax({
				type: "POST",
				url: "action.php",
				data: "username="+name+"&msg="+msg+"&action=add",
				success: function(msg){
					show_messages();
			   }
			});
			
			return false;
		});
		
	});

</script>	


</body>
</html>