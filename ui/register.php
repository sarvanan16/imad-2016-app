<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="menu.css">
<link rel="shortcut icon" href="s3logo.jpg" />
</head>
<body style="background-image: url(register_bg.jpg);background-size:cover;">
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
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
<html>
<head>
	<title>User Registeration</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
      <form class="form-signin" method="POST">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; header ("Location: login.php"); ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
</div>
 
</body>
 
</html>
</body>
</html>