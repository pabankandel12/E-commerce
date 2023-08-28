/*<?php
session_start();
'pro_id' => p_id,
'pro_name' => p_name,
'pro_price' => p_price

if(isset($_POST['p_id'])){
     if($_POST['action'] == 'add'){
      if(isset($_SESSION['cart'])){
        $isalreadyExist = 0;
       foreach($_SESSION['cart'] as $key => $value){
        if($_SESSION['cart']$key['p_id']==$_POST['p_id']){
            $isalreadyExist++;
        }
       }
         if($isalreadyExist < 1){
          $itemArray = array(
            'pro_id' => $_POST['p_id'],
            'pro_name' => $_POST['p_name'],
            'pro_price' => $_POST['p_price']
          );
          $_SESSION['cart'][] = $itemArray;
         }


      }else{
        $itemArray = array(
          'pro_id' => $_POST['p_id'],
          'pro_name' => $_POST['p_name'],
          'pro_price' => $_POST['p_price']
        );
        $_SESSION['cart'][] = $itemArray;
      }
     }
}

?>
<?php
include_once('admin/db_conn.php');
include_once('test.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=5">
    <link rel="stylesheet" href="css/about.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  <?php
  echo "hello";
?>
     <!--contain-->
    <div class="continear">
    <div class="row-12">
  <div class="card ms-4 mt-4" style="width: 30rem;">
  <img src="images/payments.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">PAYMENTS METHORD</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Number of Item: <p id="NumberOfItem"></p> </li>
    <li class="list-group-item">Discount:  5% <p id="discount"> </li>
    <li class="list-group-item">Total:<p id="total"></li>
  </ul>
  <div class="card-body">
   <button> <a href="https://esewa.com.np/#/home" class="card-link">E-sewa</a></button>
    <button><a href="https://www.rbb.com.np/" class="card-link">Mobile Banking</a></button>
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

          <div class="modal-dialog me-6" style="width: 30rem; margin:-600px 0px 0px 700px;" >
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Fill Your Details</h5>


<?php
include_once('admin/db_conn.php');
if(isset($_POST['submit'])){
  $Fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $address = $_POST['address'];
    if(!empty($Fullname)&&!empty($email)&&!empty($number)&&!empty($address)){
    $sql = "INSERT INTO user_details(fullname,phone,email,address) VALUES ('$Fullname',$number,'$email','$address')";
     if(mysqli_query($db_conn,$sql)){
      echo "Sucessfully data inserted in database.";
     }
    }else{
      echo "Fill the All data.";
    } 
}

?>        
             </div>
              <div class="modal-body">
                <form action="addcard.php" method="post" enctype="multipart/form-data">
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
                    <label for="exampleInputPassword1" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="address">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit">Sand</button>
              </div>
              </form>
            </div>
          </div>
        </div>
    </div>

        <!--footer-->
        <div class="container-fluid bg-denger justify-content-evenly " id="footer" style="margin-top: 100px;">
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
    <script src="js/payments.js?v=7"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>