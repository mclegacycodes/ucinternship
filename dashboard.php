<?php 
 require_once 'app/controller/userController.php';
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

            
            

           
                <div class="navbar-nav d-flex flex-column d-flex-start w-75">
                    <a class="nav-link my-2" href="#">APPLICATIONS</a>
                    <a class="nav-link my-2" href="#">NOTIFICATIONS</a>
                    <a class="nav-link my-2" href="#">PROFILE</a>
                 
                    <a class="nav-link btn my-5 w-100 btn-block" href="logout.php" id="login-button">LOGOUT</a>
                    
                </div>
  
       </nav>
   </header>
   <main class="col-8 mx-auto">
     <div class="container rounded p-5 mx-auto vh-100 m-3" id="main-container">
      <h4 class="mb-5">Hi, <?php echo $_SESSION['userid']['fname'].' '.$_SESSION['userid']['lname'] ?>.</h4>
    
     
<!-- 
      start table -->
      <div>
          <?php if($fetchResults->num_rows >0){ ?>
            <table class="table table-responsive">
            <th>Application ID</th>
            <th>Application Status</th>
            <th> Department</th>
            <th>Application Date </th>

            <?php while($row = $fetchResults->fetch_assoc()){ 
              switch($row['status']){
                case 1:
                  $color='bg-danger';
                  $msg = 'Rejected';
                  break;
                case 2:
                  $color='bg-success';
                  $msg = 'Completed';
                  break;
                default: 
                $color='bg-secondary';
                $msg = 'Pending';
                break;

              }
              ?>
            <tr>
              <td> <?php echo $row['id'] ?> </td>
              <td> <span class="badge border rounded-pill p-2 <?php echo $color?>"><?php echo $msg?></span></td>
              <td> <?php echo $row['department_id'] ?> </td>
               <td> <?php echo $row['application_date'] ?> </td>
            </tr>

              <?php } } ?>
              
            </table>
      </div>



      <!-- create application button -->
       <a class="btn my-5 px-4 py-2" href="#" id="new-application" style="background-color: var(--primary); color:var(--white)">New Application</a>

     </div>
   </main>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="test.js"></script>
  </body>
</html> 