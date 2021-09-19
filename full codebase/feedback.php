<?php 
session_start();
$email = $_SESSION["email"];

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
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                           
                            <li class="nav-item"><a class="nav-link" href="mycourse.php">Courses</a></li>
                            <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                           
                           
                        </ul>
                    </div>
                </div>
            </nav> 
    
  
 
       


  
         <div class="review_details_area pt-5">
        <div class="container">
          <div class="review_form white-bg">
  
                        <h4>We want to hear you.</h4>
                        <form method="post" name="feedback"  class="register-form" id="register-form"  action="post-feedback.php" >
                            <div class="row">
                                
                             
                               <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" ><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
                                            <input class="form-control" type="text" name="fname" placeholder="first name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" > Last Name</label>
                                            <input class="form-control" type="text" name="lname" placeholder="last name" >
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                     <div class="form-group">
    <label for="exampleFormControlSelect1">Select coursename</label>
    <select class="form-control" name="course" id="exampleFormControlSelect1">
      <option>C++</option>
      <option>Java</option>
      <option>Data structure</option>
      <option>Python</option>
      <option>English</option>
    </select>
  </div>
                                </div>

                                
                               
                                
                                     <div class="col-md-12">
                                <div class="form-group">
                                     <label for="validationCustom01" > Give your feedback</label>
                                        <textarea class="form-control" name="feedback" id="" cols="30" rows="10" placeholder="feedback"></textarea>
                                    </div>

                                </div>
                                
                                
                               
                                 


                                
                                <div class="col-md-12">
                                      <input type="submit" name="submit" id="signup" class="btn btn-outline-success btn-block mt-4 mb-4" value="Post"/>
                                </div>

                            </div>

                        </form>

</div>

                    </div>

        </div>
      </div>
    </div>

</body>

 <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>
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
   

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 

</html>