<?php

session_start();

$error = "";
// store session data
if (isset($_POST['signin'])) {
	
    if (empty($_POST['email']) || empty($_POST['pass'])) {
        $error = "email or Password is invalid";
    } else {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $conn = new mysqli("localhost", "root", "", "eplatform");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
		$sql = "SELECT * FROM login WHERE email='" . $email . "' AND pass='" . $pass . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $_SESSION["email"] = $email;
			echo $email;
        } else {
            $error = "email or Password is invalid";
        }
        $conn->close();
    }
}
