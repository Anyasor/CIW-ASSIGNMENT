<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Contact-page</title>
</head>
<body>

<!-- As a heading -->

<!-- contact-navigation begins -->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white border rounded p-2" href="#">DRIZZY CLOTHING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white text-center" id="navbarNavDropdown">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0 col justify-content-center">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">STORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active  border-bottom" href="contact.php">CONTACT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" >ORDER</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- contact-navigation begins -->

  <h2 class="text-center">Contact US</h2>

  <div class=" container pb-4">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-6 m-auto">
        <div class=" ">
        <div class="card mt-5">
          <div class="card-title">
            <h2 class="text-center py-2">CONTACT FORM</h2>
              <hr>
                <?php
                  $Msg="";
                  if(isset($_GET['error'])){
                  $Msg = 'please fill in the blanks';
                  echo '<div class="alert alert-danger">'.$Msg.'</div>';
                  }



                  if(isset($_GET['success'])){
                  $Msg = 'Thankyou for signing-up ';
                  echo  '<div class="alert alert-success">'.$Msg.'</div>';
                  }
                    ?>
                </div>
                
                  <div class="card-body">
                    <form action="contact-function.php" method="POST">
                      <input type="text" name="name" placeholder="User Name" class="form-control mb-2"required>
                      <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                      <input type="text" name="subject" placeholder="Subject" class="form-control mb-2" required>
                      <textarea name="msg" class="form-control" placeholder="write the message"></textarea>
                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary mt-2" name="btn-send">Sign-up</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="contact">
      <div class="container">
        <div class="row ">
          <div class="col-lg-7 col-mid-6 col-xs-6 justify-content-lg-center pb-5">
            <h3>CONTACT INFO</h3>
            <p>WE are honoured for trying to contact us , We promise to honour you with quality products that you orderd</p>
            <p><span class="display-7">Address :</span> 17 koforidua street Wuse Zone 2, Abuja </p>
            <p><span class="display-7">Phone :</span> 08076054051 </p>
            <p><span class="display-7">Email :</span> AnyasorCornelius@gmail.com </p>
          </div>
        </div>
      </div>
    </div>



    <!-- map begins-->
    <div class="container ">
      <div class="row">
        <div class="col-lg-7 col-mid-3 col-xs-3 pb-4 pe-4">
          <div class="d-flex me-3 pe-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.0909454240523!2d7.45783157415291!3d9.055468888575863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b162e1c2801%3A0xbfad3af024a4d02e!2s17%20Koforidua%20St%2C%20Wuse%20904101%2C%20Abuja%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1695722135600!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- map ends-->

    <footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-mid-left">
    <div class="row text-center text-mid-left">
      <div class="col-mid-3 col-lg-3 col-xs-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">DRIZZY CLOTHING COMPANY</h5>
        <p>Drizzy clothing Company is a developing e-commerce clothing company that gives the</p>
        <p>WE strive to distribute quality clothes to our customers or clients across the country</p>
      </div>

      <div class="col-mid-3 col-lg-3 col-xs-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">CONTACT US</h5>
        
        <p class="text-white"><i class="fa-solid fa-phone "></i>08076054051</p>
        <p class="text-white"><i class="fa-solid fa-envelope fa-sm p-1"></i>info.cornelius@gmail.com</p>
        <p class="text-white"><i class="fa-solid fa-location-dot"></i>NO: 17 Koforidua street, Wuse zone 2, Abuja<br> NIGERIA</p>

      
      <hr class="mb-4">

      <div class="row align-items-center">

        <div class="col-md-7 col-lg-8">
          <p>Copyright Cornelius All rights reserved by:
            <a href="#" style="text-decoration: none;">
              <strong class="text-warning">Drizzy Clothing</strong>
            </a>
          </p>

        </div>

        <div class="col-mid-5 col-lg-4">
          <div class="text-center text-mid-center">

          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-facebook"></i></a>
            </li>

            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-solid fa-x"></i></a>
            </li>

            
            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-instagram"></i></a>
            </li>

            <li class="list-inline-item">
              <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fa-brands fa-skype"></i></a>
            </li>

          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>