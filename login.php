<?php 
?>
<html>
<body>
	<form action="home.php" onsubmit="return validate()">
		Username:<input type="text" name="uname" id="uname"><br>
		Password:<input type="password" name="pass" id="pass"><br>
		<input type="submit" value="Login" name="btnLogin">
	</form>
	<script>
	function validate()
	{
		var x=document.getElementById('uname');
		var y=document.getElementById('pass');
		if(x.value=="" || y.value=="")
		{
			alert("Username or password is empty");
			return false;
		}
		else
			return true;
	}
	</script>
</body>
</html>