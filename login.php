<?php 
require_once 'app/controller/userController.php';
include_once 'view/layouts/navbar.php';
?>

<section class="container d-flex justify-content-center">
    <div class="form-card d-flex my-5 rounded shadow-lg">
    <div> <img src="./public/images/students.png" class="carousel-image" style="display:inline; width:400px" alt="first student"></div>
    
    <div class="main-form w-50 mx-auto ">
    <h2>LOGIN</h2>

    <?php if(!empty($errorMessage)){echo $errorMessage; } ?>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
            
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
        
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
            <label class="form-check-label" for="exampleCheck1">Remember me</label>
        </div>
        <button type="submit" class="btn btn-block" name="loginbtn">Submit</button>
    </form>
    </div>

</div>

</section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="test.js"></script>
  </body>
</html>
