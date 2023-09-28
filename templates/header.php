<?php  
include 'connection.php';
include 'functions.php';


?>




<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CHIDIEBERE FOOD STORE</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="overflow-auto" >

<nav class="navbar navbar-expand-lg bg-dark overflow-hidden">
  <div class="container">
    <div class="" id="navbarNav">
      <ul class="navbar-nav text-white ">
        <li class="nav-item">
          <a class="nav-link text-white " aria-current="page" href="#"><i class="fa-solid fa-phone fa-sm "></i> 08076054051</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="#"><i class="fa-solid fa-envelope fa-sm p-1"></i>Anyasorcornelius@gmail.com</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#"></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

 
<!-- navigation bar-2 begins -->
<div class="sticky-lg-top">
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container ">
    <a class="navbar-brand border rounded p-2 border-3 border-dark text-dark" href="#">Drizzy Clothing</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent"  >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 col justify-content-center ">
        <li class="nav-item ">
          <a class="nav-link active border-bottom " aria-current="page" href="#">HOME</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#">STORE</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="contact.php" >
            CONTACT 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">ORDER</a>
        </li>
      </ul>
      
      </form>
    </div>
  </div>
</nav>
</div>
<!-- navigation bar-2 ends -->

<!-- image section -->
<?php 
echo "<img class='img-fluid' src='./pics/clothing.jpg' width='50%' height=''  />'";
?>




<!-- newsletter section begins -->
    
  <main class="head " >
  <div class="newsletter ">
    <div class="container   ">
      <div class="row ">
        <div class="col-xs-4 col-lg-4 col-mid-4">
          <span class="display-2">Subscribe </span> <br>
          <span class="display-4 p-3 ">Now !</span><br>
          <span class="display-7 ">to get 50% percent discount as a new Subscriber </span><br>
          <button type="button" class="btn btn-primary btn-sm mt-3 " data-bs-toggle="modal" data-bs-target="#myModal"> Subscribe</button>        
        </div>
      </div>
    </div>
  </div>

  <div class="modal " id="myModal">
  <div class="modal-dialog modal-sm ">
  <div class="modal-content modal-sm-3">

  <form method="POST" action="index.php.">
      <div class="modal-header text-center">
        <h4 class="display-5 text-center text-warning p-4"> Sign-up  </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control " id="exampleInputName1" aria-describedby="nameHelp " name="name" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control " id="exampleInputPassword1 " name="email" required>
      </div>
      </div>


      <div class="modal-footer">
        <div class="d-flex  gap-2 col-6 mx-auto ">
         <button type="submit" class="btn btn-primary pt-2 dave" name="submit-btn" data-bs-dismiss="modal">Subscribe</button>
        </div>
      </div>
  
  </form>
  </main>

  <article>
    <div class="row justify-content-center display-6 text-dark mt-5 mb-3 p-3">Drizzy Clothing</div>

    <div class="blog">
      
    <div class="container">

    <div class="d-flex flex-lg-row mb-7  gap-3 p-2 ">

      
        <div class="card" style="width: 18rem;">
          <img src="./pics/hoodie1.jpg" class="card-img-top" alt="ash with black stripes hoodie " height="150px">

          <div class="card-body">
            <p class="card-text">Ash hoodie with black stripes</p>
            <p>N1000</p>
            <a href="#" class="btn btn-primary btn-sm">Order</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="./pics/hoodie2.jpg" class="card-img-top" alt="unisex hoodie" height="150px">

          <div class="card-body">
            <p class="card-text">Unisex comfortable hoodie</p>
            <p>N10,000</p>
            <a href="#" class="btn btn-primary btn-sm">Order</a>
          </div>
        </div>
        </div>

      <div class="d-flex flex-lg-row gap-3 p-2">
        <div class="card" style="width: 18rem;">
          <img src="./pics/hoodie3.jpg" class="card-img-top" alt="..." height="150px">

          <div class="card-body">
            <p class="card-text">black and yellow hoodie</p>
            <p>N4000</p>
            <a href="#" class="btn btn-primary btn-sm">Order</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="./pics/hoodie4.jpg" class="card-img-top" alt="..." height="150px">

          <div class="card-body">
            <p class="card-text">Ash regular hoodie</p>
            <p>N800</p>
            <a href="#" class="btn btn-primary btn-sm">Order</a>
          </div>
        </div>
        </div>
      </div>


      

      </div>
      </div>  
          
    </div>
    

    </div>
      
  </article>
<!-- newsletter section ends --> 


