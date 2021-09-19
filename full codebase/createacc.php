<?php
$statusMsg = "";
if (isset($_POST['submit'])) {
	
	$conn = new mysqli("localhost", "root", "", "eplatform");

        // If file upload form is submitted
        $fname = $_POST["fname"];
         $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
         $phone = $_POST["phone"];
        


        if (isset($_POST["submit"])) {
            $status = 'error';
            
                
                    $insert = $conn->query("INSERT into login (`fname`,`lname`,`email`, `pass`,`phone`) VALUES ('$fname','$lname','$email','$pass','$phone')");

                    $conn->close();
                 

                    if ($insert) {
                        $status = 'success';
                        $statusMsg = "user created successfully.";
                        header("location: login.php");
                    } else {
                        $statusMsg = "user creation failed, please try again.";
                    }
                } 
            
        // Display status message
        echo $statusMsg;

}

	


    ?>
	<a href="login.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Login</button>
        </a>
		
	<a href="index.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Register Again</button>
        </a>