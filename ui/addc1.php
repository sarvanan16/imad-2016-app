<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['id'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
 
        $query = "INSERT INTO `candidate`(`name`, `id`, `votes`) VALUES ('$name','$id',0)";
        $result = mysqli_query($connection, $query);
        if($result){
			echo "Succesfull";
			sleep(3);
            header('Location:addc.html');
        }
		else{
            echo "error";
        }
    }
    ?>