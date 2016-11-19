<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="menu.css">
<title>
Voting...
</title>
</head>
<body>
<ul>
<li style="float:right"><a href="logout.php" class="logout">Log Out</a></li>
</ul>
<?php
 session_start();
 require('connect.php');
 $username=$_SESSION['username'];
		if(isset($_POST['vote'])){
			$ids= $_POST['vote'];
			$sql = "SELECT votes FROM candidate WHERE id='$ids'";
			$result = $connection->query($sql);
			if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$votes= $row["votes"];
		}
		$votes=$votes+1;
		$sql="UPDATE candidate SET votes='$votes' WHERE id='$ids'";
		$sql2="UPDATE user SET voted='1' WHERE username='$username'";
		if(($connection->query($sql)==TRUE)&&($connection->query($sql2)==TRUE)){
			echo "VOTE succesful";
		}
		else{
			echo "VOTE failed ERROR404";
		}
	} else {
		echo "0 results";
	}
	 }
?>
</body>
</html>
