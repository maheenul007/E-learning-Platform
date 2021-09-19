<?php 
session_start();
$email = $_SESSION["email"];

?>



<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM courses");
$result3 = mysqli_query($conn,"SELECT * FROM feedback");

$query = "select id from login where email ='".$_SESSION['email']."'";
                            $result2 = mysqli_query($conn,$query);
                            while ($row = $result2->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E learning website</title>

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


<link rel="stylesheet" type="text/css" href="style.css">

     <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>



</head>



    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                <div class="container px-5">
                    
                     <div class="navbar-header">
                                        <!-- start logo -->
                                        <a href="home.php" class="navbar-brand width-200px sm-width-180px xs-width-150px">
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

</div>

   
            <?php
 


                  if(isset($_GET['error']))
                   echo $_GET['error'];
   
 
                 ?>
        
   
 <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Transform your life through education</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Learners around the world are launching new careers, advancing in their fields, and enriching their lives.</p>


                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4 ml-3" href="#!">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/bg.svg" alt="..." /></div>
                        <p class="font-size18 xs-font-size16 text-white letter-spacing-1 margin-15px-bottom">logged in as <?php echo $email;?></p>
                    </div>
                </div>
            </header>
  

    <!-- about section starts  -->

   <div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Why Choose</span> Us?</h4>
          <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
        </div>
        
        
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6>24 x 7 User Support</h6>
            <p>If our customer has any problem and any query we are always happy to help then.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6>Business Growth</h6>
            <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while you're climbing it</p>
          </div>
        </div>
       
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>Affordable cost</h6>
            <p>Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- about section ends -->

    <!-- course section starts  -->

    <section id="gallery">

        <div class="section-head col-sm-12">
          <h4><span>Our </span> Courses </h4>
       
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
      
    <img class="img-responsive img-circle img-thumbnail" src="data:image/png;base64,'.base64_encode($row['banner']).'" width="700" height="250"   />
      <div class="card-body">
        <h5 class="card-title">'.$row['cname'].'</h5>
        <p class="card-text">'.$row['description'].'</p>';

       echo "<a href='enroll.php?cid=$cid&uid=$id' class='btn btn-outline-success btn-sm'>Enroll yourself</a>
        <a href='' class='btn btn-outline-danger btn-sm'><i class='far fa-heart'></i></a>
      </div>
     </div>
    </div>"
 ;
}
?>

  
  </div>
</div>
</section>
</main>


    <!-- course section ends -->
        

      <
            <div class="container">
                <div class="text-center margin-40px-bottom">
                    <h3 class="no-margin-bottom">We want to hear from you</h3>
                </div>
            
            <div class="row">
            <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result3)) {
                    ?>
                <div class="col-lg-4 col-md-6 margin-30px-bottom">
                    <div class="card text-dark border-color-light-black h-100">
                    <div class="card-body padding-20px-tb padding-30px-lr">
                      
                                                   
                         <i class="fa fa-quote-left pr-2" aria-hidden="true"></i> 
                     <div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header"><?php echo $row["fname"]; ?></div>
  <div class="card-body text-info">
    <h5 class="card-title"><?php echo $row["course"]; ?></h5>
    <p class="card-text"><?php echo $row["feedback"]; ?></p>
  </div>
</div>
                    </div>
                </div>
                 </div>
                 <?php
                        $i++;
                        }
                        ?>
                 </div>
            </div>
        

     



    <!-- footer section starts  -->

   
 <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Learners Edge 2021</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>

   

    <!-- footer section ends -->

    <!--  cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 
    </body>
 

</html>