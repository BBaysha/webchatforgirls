<!DOCTYPE html>
<html>
<head>
	<title>testwebchat</title>

</head>
<body background="fon.jpeg">
<div id="main">
<div id="info">
<h2>login here</h2>

<form action="login.php" method="post">
	<label>Email</label>
	<input type="text" name="email" placeholder="email"><br><br>
	<label>Password</label>
	<input type="text" name="password" placeholder="password"><br><br>
	<button style="background-color: #1687a7; color: #f6f5f5;" type="submit"><b>Login</b></button>
</form>
	<h2>dont have an account sign up here</h2>
<form action="add_user.php" method="post">
	<label>Username:</label>
<input type="text" name="name" placeholder="name"><br><br>
<label>Email Add:</label>
<input type="text" name="email" placeholder="email"><br><br>
<label>Password:</label>
<input type="text" name="password" placeholder="password"><br><br>
<button style="background-color: #1687a7; color: #f6f5f5;" type="submit"><b>Sign Up</b></button>
</form>

</div>
</div>
</body>
<style>
#main{
	height: 450px;
	width: 450px;
	background-color: #d3e0ea;
	margin-top: 100px;
	border-radius: 20px;
	margin-left: 500px
}
#info{
	margin-left: 20px;
	padding-top: 2px;
	color: #276678;
}
input[type=text]{
	width: 260px;
	box-sizing: border-box;
	border: 2px solid pink;
	border-radius: 4px;
}
</style>
</html>