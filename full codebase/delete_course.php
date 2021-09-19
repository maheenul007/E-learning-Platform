<?php

if (isset($_GET['uid'])!="") {
	$cid = $_GET['cid'];
$uid = $_GET['uid'];


$conn = new mysqli("localhost", "root", "", "eplatform");
      
        
// sql to delete a record
$sql = "DELETE FROM enroll WHERE cid='$cid'AND uid='$uid'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  
} else {
  echo "Error deleting record: " . $conn->error;
  
}
header("Location: home.php");

}
