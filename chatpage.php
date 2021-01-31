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
  height: 525px;
	width: 900px;
	background-color: #d3e0ea;
	margin-top: 100px;
	border-radius: 20px;
	margin-left: 350px
  }
  .btn-primary {
    background-color: #487e95;
margin-left: 750;
width: 100px;
margin-top: 2
	}
	.display-chat{
		height:300px;
		background-color:#d3e0ea;
		margin-bottom:4%;
		overflow:auto;
		padding:15px;
	}
	.message{
		background-color: #93abd3;
		color: white;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;
	}
  </style>

<div class="container">
  <center><h2>Welcome <span style="color:#f6f5f5;"><?php echo $_SESSION['name']; ?> !</span></h2>
	<label>Join the chat</label>
  </center></br>
  <div class="display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea style="width: 870; margin-left: 15" name="msg" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
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