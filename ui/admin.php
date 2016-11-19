<html>
<head>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="menu.css">
<script>
confirm(){
	var r = confirm("Press a button");
if (r == true) {
    x = "You pressed OK!";
} else {
    x = "You pressed Cancel!";
}
}
</script>
<title>
Admin
</title>
</head>
<body>
<ul>
<li style="float:right"><a href="logout.php" class="logout">Log Out</a></li>
</ul>
<p>
<a href="addc.php">Click here to add Candidate</a>
</p>
<p><a href="result.php">Click for result</a></p>
<p><a href="reset.php" onClick='confirm()'>Click here to reset the election.</a></p>
</body>
</html>