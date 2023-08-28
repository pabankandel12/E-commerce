<?php
include_once('admin/db_conn.php');
?>
<?php



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/860036b92c.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Galaicha Nepal</title>
  </head>
  <body>
      
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa-solid fa-user"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LOGIN </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <?php   
       include("admin/db_conn.php");
       if(isset($_POST['submit'])){
           $username=$_POST['email'];
           $password=$_POST['password'];
           if(!empty($username)&&!empty($password)){
           $sql="SELECT * FROM user_signup ";
           $result=mysqli_query($db_conn,$sql);
           if(mysqli_num_rows($result)===1){
               $row=mysqli_fetch_assoc($result);
               if($row['email']===$username && $row['password']===$password){
                   header("location:index.php");
               }else{
                   echo "<script>alert('wrong username or password!!')</script>";
               }
           }
       }  
      }
      
                ?>
                <form action="index.php" methord="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="password">
                  </div> 
                  <div class="signuplink">
                    <h3>You have't a account <a href="user_signup.php">Click Here</a></h3>
                  </div> 
                  <style>
                 .signuplink h3  a{
                      color : black;
                      text-decoration : none;
                    }
                  </style>
                 <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">Log in</button>
              </div>
              </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn  btn-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <i class="fa-solid fa-cart-shopping"></i><span class="addcart"> 0</span></button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Cart </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" id="Displaydata">
                <button class="btn btn-primary text-center"><a href="addcard.php">pay</a></button>
              </div>
            </div>
          </div>
        </div>
        <style>
          a{
            color:black;
            text-decoration: none;
          }
        </style>
        <!-- Modal -->
        <!--signup page
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">SIGN UP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="test.php" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fullname">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="number">
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
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit1" >SIGN UP</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    -->

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