<html>
<head>
<title>
Login
</title>
<link rel="stylesheet" href="menu.css">
<link rel="shortcut icon" href="s3logo.jpg" />
</head>
<body style="background-image: url(login_bg.jpg);background-size:cover;">
<embed name="GoodEnough" src="bgm.mp3" loop="false" hidden="true" autostart="true">
<ul>
  <li><a class="active" href="welcome.php">Home</a></li>
  <li class="dropdown"><a href="login.php" class="dropbtn">Login</a>
   <div class="dropdown-content">
      <a href="register.php" class="register">Register</a>
    </div>
  </li>
  <li><a href="detail.html"		class="election_details">Election Details</a></li>
  <li style="float:right"><a href="about.html" class="about">About</a></li>
</ul>
<?php  
session_start();
 require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

$_SESSION['username'] = $username;
}else{

$fmsg = "Invalid Login Credentials.";
$username="";
}
}

if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
if($username=='admin'){
	header ("Location: admin.html");
}
else{
header("Location: validate.php");
}	
}
else{

?>
<html>
<head>
	<title>User Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="styles.css" >
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
</div>
 
</body>
 
</html>
<?php } ?>
</body>
</html>