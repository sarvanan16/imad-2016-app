<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="menu.css">
<title>
Validating...
</title>
</head>
<body>
<ul>
<li style="float:right"><a href="logout.php">Log Out</a></li>
</ul>
<?php
session_start();
 require('connect.php');
 $username=$_SESSION['username'];
 $sql="SELECT voted FROM user WHERE username='$username'";
 $result = mysqli_query($connection,$sql);
 while($row = $result->fetch_assoc()){
	 $voted=$row["voted"];
 }
 if($voted==0)
 {
	 header("Location: voter.php");
 }
 else
 {
	 echo "Sorry you have already voted.";
 }
?>
</body>
</html>