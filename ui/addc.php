<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="menu.css">
<link rel="shortcut icon" href="s3logo.jpg" />
</head>
<body>

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
    if (isset($_POST['name']) && isset($_POST['id'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
 
        $query = "INSERT INTO `candidate`(`name`, `id`, `votes`) VALUES ('$name','$id',0)";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Candidate added Successfully.";
        }else{
            $fmsg ="Error. Try again later.";
        }
    }
    ?>
<html>
<head>
	<title>Add Candidate</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
      <form class="form-signin" method="POST">
      
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Please Enter details:</h2>
        <div class="input-group">
	  <input type="text" name="name" class="form-control" placeholder="Name" required>
	</div>
			  <input type="text" name="id" class="form-control" placeholder="ID" required>
	</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
</div>
 
</body>
 
</html>
</body>
</html>