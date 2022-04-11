<?php 
include_once 'view/layouts/navbar.php';
?>

   <!-- hero page begin -->
  <section class="container d-flex flex-column flex-md-row justify-content-between">
       <div id="heroleft" class="mb-5">
           <div>
                <h1>Find the right <br> internship for you</h1>
                <p>Gain work experience & kickstart your career</p>
                <a href="#"> <button class="btn">Apply Now</button></a>
           </div>
            
       </div>

  
       <img src="./public/images/excited.jpg" alt="students in class" id="hero-image"> 
   
  </section>
  <!-- hero section end -->

  <!-- begin requirements section -->
  <section id="req-section" class="mt-5 pt-5">
    <div class=" container">
        <div  class="mb-5 req-heading">
            <h2>All you need to know about the internship application</h2>
            <hr>
        </div>

        <div id="req-body" class="d-flex justify-content-between">
          
            <img src="./public/images/reading.png" alt="reading vector art" id="req-image">  
          
            <div id="requirements">
                <h3 class="mb-3">General Requirements</h3>
                <div class="mb-4">
                     <img src="./public/images/check.png" alt="reading vector art" class="req-icon me-2">
                     <span>A person applying must be a student of University of CapeCoast</span>
                 </div>
                
                 <div class="mb-4">
                     <img src="./public/images/check.png" alt="reading vector art" class="req-icon me-2">
                     <span>A student must have completed at least 1 Academic year in University of CapeCoast</span>
                 </div>
                
                 <div class="mb-4">
                     <img src="./public/images/check.png" alt="reading vector art" class="req-icon me-2">
                     <span>Applicants must have read about the Place of internship</span>
                 </div>
                
                 <div class="mb-4">
                     <img src="./public/images/check.png" alt="reading vector art" class="req-icon me-2">
                     <span>Applicants must have updated their profile details for easy application</span>
                 </div>
                
               
            </div>
        </div>
    </div>
  </section>

  <!-- end requirements section -->
  
  <!-- begin how to apply -->
  <section class="container" id="apply-section">
      <div class="row">
        <div class="step-tile step1 d-flex flex-column justify-content-center align-items-center col-sm-4 mx-auto">
          <div>
              <img src="./public/images/steps.png" alt="3d icon of a man making steps">
        </div>
          <h4>Step 1</h4>
          <p>Login to your account using the "Login button"</p>
      </div>

      <div class="step-tile step2 d-flex flex-column justify-content-center align-items-center col-sm-4 mx-auto">
          <div>
              <img src="./public/images/steps.png" alt="3d icon of a man making steps">
         </div>
          <h4>Step 2</h4>
          <p>Complete the application form, add necessary documents and update your profile details.</p>
      </div>

      <div class="step-tile step3 d-flex flex-column justify-content-center align-items-center col-sm-4 mx-auto">
          <div>
              <img src="./public/images/steps.png" alt="3d icon of a man making steps">
         </div>
          <h4>Step 3</h4>
          <p>Shortlisted Applicants for the internship will be notified.</p>
      </div>
      </div>
      
  </section>
<!-- 
  end how to apply section -->

<!-- 
  begin carousel -->
  <section class="container mt-5">
    <div  class="mb-5 req-heading">
            <h2>What other students say about internships</h2>
            
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active d-flex" data-bs-interval="10000">
      <img src="./public/images/user1.jpg" class="carousel-image w-50" alt="first student">
    <div class="testimony ms-2">
        <h4>Ike Gaiden</h4>
        <span>2020/2021 @E-Learning & Knowledge Commons</span>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
             Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam,
        </p>
    </div>
    </div>

    <div class="carousel-item d-flex" data-bs-interval="2000">
      <img src="./public/images/user2.jpg" class="carousel-image w-50" alt="second student">
      <div class="testimony ms-2">
        <h4>Lamisi Moro</h4>
        <span>2020/2021 @E-Learning & Knowledge Commons</span>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
             Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam,
        </p>
    </div>
    </div>

    <div class="carousel-item d-flex">
      <img src="./public/images/user3.jpg" class="carousel-image w-50" alt="third student">
      <div class="testimony ms-2">
        <h4>George Anku</h4>
        <span>2020/2021 @E-Learning & Knowledge Commons</span>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
             Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam,
        </p>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  </section>




   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>