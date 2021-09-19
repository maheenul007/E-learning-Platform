<?php 
session_start();
$email = $_SESSION["email"];

?>

<?php

$conn = new mysqli("localhost", "root", "", "eplatform");

$query = "select id from login where email ='".$_SESSION['email']."'";
                            $result2 = mysqli_query($conn,$query);
                            while ($row2 = $result2->fetch_assoc()) {
                                $id = $row2['id']; 
                                
                            }

$result = mysqli_query($conn,"SELECT * FROM enroll,courses WHERE enroll.cid=courses.cid AND enroll.uid=$id");




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E learning website</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

     <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
  <body>
         <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                <div class="container px-5">
                    
                     <div class="navbar-header">
                                        <!-- start logo -->
                                        <a href="index.php" class="navbar-brand width-200px sm-width-180px xs-width-150px">
                                          <a class="navbar-brand" href="#"><h2>Learners Edge</h2></a>
                                        <!-- end logo -->
        
                                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                           
                            <li class="nav-item"><a class="nav-link" href="mycourse.php">Courses</a></li>
                            <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                           
                           
                        </ul>
                    </div>
                </div>
            </nav>

  
    <section class="pt-5"id="gallery">

        <div class="section-head col-sm-12">
          <h4><span>My enrolled </span> Courses </h4>
       
        </div>
  <div class="container">
    <div class="row">

      <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                         $cid = $row['cid'];
                           $description = $row['description'];
                           $cname = $row['cname'];
                           $banner = $row['banner'];   

   echo '<div class="col-lg-4 mb-4">
    <div class="card">
      
    <img class="img-responsive img-circle img-thumbnail" src="data:image/png;base64,'.base64_encode($row['banner']).'" width="700"   />
      <div class="card-body">
        <h5 class="card-title">'.$row['cname'].'</h5>
        <p class="card-text">'.$row['description'].'</p>';

       echo '<a href='.$row['link'].' class="btn btn-outline-success btn-sm">View resource</a>';
       echo "<a href='delete_course.php?cid=$cid&uid=$id' class='btn btn-outline-danger btn-sm ml-2'><i class='fa fa-trash'></i></a>
      </div>
     </div>
    </div>"
 ;
}
?>

  
  </div>
</div>
</section>

  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </body>
</html>
