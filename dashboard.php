<?php 
require_once 'app/controller/applicationController.php';

if(!$_SESSION['userid']){
  header('Location: login.php');
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    
    <title>Internship UCC | Dashboard</title>
  </head>
  <body class="row vh-100" id="dashboard-body">

  <!-- header start -->
   <header class="col-3">
       <nav role="navigation" class="container navbar navbar-dark navbar-expand-lg d-flex flex-column" id="nav">
           
           <div class="navbar-brand">
               <img src="public/images/ucc.png" alt="ucc logo" class="img-fluid" id="ucc-logo">
               <span> INTERNSHIP UCC</span>
            </div>

            
            

           
                <div class="navbar-nav d-flex flex-column d-flex-start">
                    <a class="nav-link my-2" href="#">APPLICATIONS</a>
                    <a class="nav-link my-2" href="#">NOTIFICATIONS</a>
                    <a class="nav-link my-2" href="#">PROFILE</a>
                 
                    <a class="nav-link btn my-5" href="logout.php" id="login-button">LOGOUT</a>
                    
                </div>
  
       </nav>
   </header>
   <main class="col-8">
     <div class="container rounded p-5" id="main-container">
      <h4>Hi, Kinglsey Twum</h4>
      <?php echo $_SESSION['userid']; ?>
     
<!-- 
      start table -->
      <div>

      </div>
     </div>
   </main>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="test.js"></script>
  </body>
</html>