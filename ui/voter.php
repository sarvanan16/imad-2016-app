<html>
<head>
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="table.css">
<link rel="shortcut icon" href="s3logo.jpg" />
<link rel="stylesheet" href="menu.css">
<title>
Welcome Voter
</title>
</head>
<body style="background-image: url(voter_bg.jpg);background-size:cover;">
<ul>
<li style="float:right"><a href="logout.php" class="logout">Log Out</a></li>
</ul>
<div align='left'>
<form method='post' action='vote.php' class="elegant-aero" name='f'>
<fieldset>
<legend>Candidates:</legend>
<?php
$value=1;
session_start();
 require('connect.php');
 $sql = "SELECT name,id FROM candidate";
$result = mysqli_query($connection,$sql);
if ($result->num_rows > 0) {
    // output data of each row
	echo "<table class='hoverTable' border='1'><th>Name</th><th>Candidate ID</th><th>Click to vote</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["id"]."</td><td><input type='radio' name='vote' value='$value' checked='checked'></input></td>";
    $value=$value+1;
	}
	echo "</table>";
} else {
    echo "0 results";
}
 ?>
 </fieldset>
 <input type='submit' value='Vote' style="float:right" class="button" onClick='validate()'>
 <input type='reset' value='Reset' style="float:left" class="button">
 </form>
 </div>
 
</body>
</html>