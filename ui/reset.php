<html>
<head>
<title>
Reset
</title>
</head>
<body>
	<?php
		require('connect.php');
		$query = "TRUNCATE TABLE candidate";
		$query2="TRUNCATE TABLE user";
		$result = mysqli_query($connection, $query);
		$result2 = mysqli_query($connection, $query2);
		if(($result)&&($result2)){
				header('Location: logout.php');
		}
		else{
			echo "FAILED";
		}
	?>
</body>
</html>