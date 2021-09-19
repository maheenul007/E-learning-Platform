<?php
session_start();

$email = $_SESSION["email"];





$error = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "eplatform");

       
		$fname = $_POST["fname"];
		$lname = $_POST["lname"]; 
		$course = $_POST["course"];
		$feedback = $_POST["feedback"];
		
		
		

                    $insert = $conn->query("INSERT into feedback (`fname`, `lname`, `course`, `feedback`) VALUES ('$fname','$lname','$course','$feedback')");

                    $conn->close();
                 

                    if ($insert) {
                        $error = '<div class="alert alert-success">feedback posted successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }
                 
        
}
header("Location: home.php?error=$error");

	


    ?>
	