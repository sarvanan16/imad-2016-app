<html>
<head>
<link rel="stylesheet" href="table.css">
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="menu.css">
<title>
Admin
</title>
</head>
<body>
<ul>
  <li><a href="welcome.php" class=active>Home</a></li>
  <li class="dropdown"><a href="login.php" class="dropbtn">Admin Area</a>
  
  </li>
  <li><a href="detail.html" class="election_details">Election Details</a></li>
<li style="float:right"><a href="logout.php" class="logout">Log Out</a></li>
</ul>
<?php

session_start();
 require('connect.php');
 $username=$_SESSION['username'];
 $sql = "SELECT * FROM candidate";
 $result = $connection->query($sql);
 echo "<table border='2' class='hoverTable'><tr><th>ID</th><th>Candidate</th><th>Votes</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['votes']."</td></tr>";
			}
 echo "</table>";
?>
</body>
</html>