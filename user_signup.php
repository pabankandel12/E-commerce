       <?php
          include_once('admin/db_conn.php');
       ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/860036b92c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Galaicha Nepal</title>
  </head>
  <body>
       
  <nav class="navbar navbar-expand-lg bg-primiary" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="logo" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="other.php">Other</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-4" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-2" type="submit">Search</button>
          </form>
          </div>
        </div>
      </div>
    </div>
 </nav>
        
        <style>
          a{
            color:black;
            text-decoration: none;
          }
        </style>
        <!-- Modal -->

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">SIGN UP</h5>
<?php
if(isset($_POST['submit'])){
  $Fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  
     $sql = "INSERT INTO user_signup(fullname,phone,email,password,cpassword) VALUES ('$Fullname',$number,'$email','$password','$cpassword')";
     if(mysqli_query($db_conn,$sql)){
      echo "Sucessfully data inserted in database.";
     }
  
}

?>        
             </div>
              <div class="modal-body">
                <form action="user_signup.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputText1"  name="fullname">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputText1" name="number">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Conform Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
                  </div>

                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">terms and condition</label>
                    <p>Terms of service are the legal agreements between a service provider and a person who wants to
                      use that service. The person must agree to abide by the terms of service in order to use the
                      offered service. Terms of service can also be merely a disclaimer, especially regarding the use of
                      websites. </p>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit" >SIGN UP</button>
              </div>
              </form>
            </div>
          </div>
<!--footer-->
     <div class="container-fluid bg-denger justify-content-evenly" id="footer">
    <div class="row bg-denger justify-content-evenly">
      <div class="col-sm-3 mt-5">
        <img src="images/logo.jpg" alt="" style="width: 300px;">
        <p class="text-denger">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, perspiciatis.</p>
      </div>
      <div class="col-sm-3 text-decoration-none mt-5">
        <h2>Important link</h2>
        <a href="">Home</a><br>
        <a href="">Produces</a><br>
        <a href="">Add cart</a><br>
        <a href="">About us</a><br>
        <a href="">contact us</a><br>

      </div>
      <div class="col-sm-3 mt-5">
        <h1>Maps</h1>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.41883841602!2d85.30483066506201!3d27.70435163279316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18f8b5a16d43%3A0xb4f02f94e307d660!2sBasantapur%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1663908008513!5m2!1sen!2snp"
          width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <div class="container-fluid ">
   <div class="row justify-content-evenly mt-2" id="Last-footer">
      <div class="col-12" id="last-footer-contain">
        <p class="text-center pt-2" >© २००६-२०२२ galaicha nepal.com सर्वाधिकार सुरक्षित</p>
      </div>
    </div>
  </div> 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- starting of php for insorting the user information -->
<?php
if(isset($_POST['submit'])){
  $Fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  echo "paban kandel";
}

?>