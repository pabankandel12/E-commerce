<?php
session_start();
include_once('admin/db_conn.php');
include_once('test.php');
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title."-Galaicha Nepal";?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css?v=3">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <?php
         include ("signin-signup.php");

         ?>
       <!--  -->
             </div>
            </div>
          </div>
        </div>
  </nav>



  <div class="row container-fluid justify-content-evenly mt-5">
    <div class="col-10">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/galaicha1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/galaicha2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/galaicha3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!--main contain-->

  <div class="row justify-content-evenly mt-5" id="card-container">

  <?php
  
   $sql = "SELECT * FROM product";
   $result = mysqli_query($db_conn,$sql);
   if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){


    ?>
    <div class="col-md-3 me-1 mb-2" id="card">
      <div class="card" style="width: 18rem;"id="card">
        <img src="admin/upload_images/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['titile'];?></h5>
          <p class="card-text"><?php echo $row['dis'];?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price:<?php echo $row['price'];?></li>
          <li class="list-group-item">Color:<?php echo $row['color'];?></li>
        </ul>
        <div class="card-body">
        <input type="hidden" id="name<?php echo $row['id'];?>" value='<?php echo $row['titile'];?>'>
        <input type="hidden" id="price<?php echo $row['id'];?>" value='<?php echo $row['price'];?>'>
        <button class=" btn btn-primary addpro"  data-id ="<?php echo $row['id'];?>" name="submit">ADD CART</button>    
          <a href="addcard.php" class="card-link btn btn-primary" >Payment</a>
        </div>
      </div>
    </div>
    <?php 
    }
    }
    ?>
  </div>
  </form>
       <!--
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="images/galaicha3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
        </div>
      </div>
    </div>
  
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="images/galaicha1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body text-decoration-none">
          <a href="#" class="card-link">Card link</a>
        </div>
      </div>
    </div>
  </duv>
  -->

  <div class="container-fluid ">
    <div class="row justify-content-evenly mt-7">
      <div class="col-md-10 mt-7" id="massage">
        <img src="images/web.png" alt="director" class="director">
        <h1>
          <p class="text-align-centre mt-5">"hello i am software and web developer." ipsum dolor sit amet consectetur adipisicing elit. Veniam,
            magni illo! Obcaecati a repellat pariatur necessitatibus, nobis deserunt magni facilis ipsum tempore
            laborum aliquam doloremque nostrum vitae, quos veritatis excepturi.
          </p>
        </h1>
      </div>
    </div>
  </div>

<div class="displayoutput" id="display">
<?php
      if (empty($_SESSION['cart'])) {
        $outputTable = " ";
        $total = 0;
        $outputTable .= "<table class='table table-bordered'><thead><tr><td>Name</td><td>Price</td><td>Action</td> </tr></thead>";
        foreach ($_SESSION['cart'] as $key => $value) {
            $outputTable .= "<tr><td>" . $value['pro_name'] . "</td><td>" . $value['pro_price'] . "</td><td><button id=" . $value['pro_id'] . " class='btn btn-danger delete'>Delete</button></td></tr>";
            $total = $total + $value['pro_price'];
        }
        $outputTable .= "</table>";
        $outputTable .= "<div class='text-center'><b>Total: " . $total . "</b></div>";
        echo $outputTable;
      }
?>
</div>
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
  <script src="js/payments.js?v=23"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>