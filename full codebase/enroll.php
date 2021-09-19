<?php
session_start();


$email = $_SESSION["email"];
$uid = $_GET['uid'];
$cid = $_GET['cid'];


$error = "";


    $conn = new mysqli("localhost", "root", "", "eplatform");
                            
 
     $duplicate=mysqli_query($conn,"select * from enroll where uid='$uid' AND cid = '$cid'");
   
    


    
    
 if (mysqli_num_rows($duplicate)>0)
{
    $error = '<div class="alert alert-danger">You are already enrolled!.</div>';
    
    header("Location: home.php?error=$error");
}



else{
 
	
	
                    $insert = $conn->query("INSERT into enroll (`cid`,`uid`) VALUES ('$cid','$uid')");

                    $conn->close();
                 
                    if ($insert) {
                        $error = '<div class="alert alert-success">Applied successfully!</div>';
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                    }
                 
            
        // Display status message
        echo $error;


    }

header("Location: home.php?error=$error");

	




    ?>
	