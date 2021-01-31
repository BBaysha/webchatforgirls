<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		include "config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
?>
<body background="fon.jpeg">
<style>
  h2{
color:#276678;
  }
  label{
color:#276678;
  }
  span{
	  color:#f6f5f5;
	  font-weight:bold;
  }
  .container {
    height: 200px;
	width: 450px;
	background-color: #d3e0ea;
	margin-top: 250px;
	border-radius: 20px;
	margin-left: 500px;
  }
  .btn-primary {
    background-color: #276678;
	}
	.display-chat{
		height:300px;
		background-color:#f6f5f5;
		color:#f6f5f5;
		margin-bottom:center;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #f6f5f5;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: center;
	}
  </style>

<div class="container">
  <center><h2>Welcome <span style="color:#f6f5f5;"><?php echo $_SESSION['name']; ?> !</span></h2>
  <br><br>
	<label>Click below to Join the chat</label><br>
	<br><br>
	<a href="chatpage.php" class="btn btn-primary" style="color:#f6f5f5; ">Open Chat</a>
  
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>