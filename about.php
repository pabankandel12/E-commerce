<?php
include_once('test.php');
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
  <link rel="stylesheet" href="css/about.css?v=<?php=$version;?>">
   <link rel="stylesheet" href="css/style.css?v=<?php=$version;?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css?v=5">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primiary" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="logo" id="logo"></a>
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
      </div>
    </div>
  </nav>


  <!--main contain-->
  <div class="container-fluid ">
    <div class="row bg-success mt-5 mb-3" style="height: 50px;">
      <div class="col-10 text-white">
        <h5 class="text-center pt-2" style="font-size: 28px;font-style:italic">OUR COMPANY ABOUT</h5>
      </div>
    </div>
    <div class="row">
    <div class="col-10 justify-content-evenly " >
      <img src="images/office.jpg" alt="office"class="img-fluid office">
    </div>
  <div class="row">
   <div class="col-10 justify-content-center">
    <p class="justify-content-evennly mt-3 mb-3 ms-5 me-5" id="text_for_massage">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, praesentium rerum dolor repellat fuga tenetur.
      Quasi inventore minima omnis ea sed animi repellendus, sit tenetur, molestiae voluptatem id nesciunt
      exercitationem natus blanditiis. Nisi explicabo error cum dolorum modi, labore distinctio dolor quaerat, non
      commodi dignissimos repellendus animi esse magnam libero!</p>
    </div>
  </div>
  </div>
  </div>
<!--QUery-->
<div class="container-fluid ">
  <div class="row bg-success text-white mt-5 mb-3"style="height: 50px;">
    <h5 class="text-center mt-2 mb-3" style="font-size: 28px;font-style:italic">QUERY OF CUSTUMER</h5>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        HOW TO BUY THE PRODUCT ?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        HOW TO PAYMENT ?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        DELIVARY TIME AND CHARGE ?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>

  <!--footer-->

  <div class="container-fluid bg-denger justify-content-evenly mt-12" id="footer">
    <div class="row bg-denger justify-content-evenly mt-12">
      <div class="col-sm-3 mt-5 " id="footer1">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>