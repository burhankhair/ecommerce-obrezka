<?php
session_start();
	if (isset($_SESSION['uid'])) 
	{
		include('dbcon.php');
		$uid = $_SESSION['uid'];
		$query = "SELECT * FROM `user` WHERE `id` = '$uid'";
		$run = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($run);
	}
	else{

	}
	
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>OBREZKA</title>
  <link rel="stylesheet" href="CSS/styles.css" />
  <link rel="stylesheet" href="CSS/footer.css" />
  <link rel="stylesheet" href="CSS/cart-icon.css" />

  <script src="https://kit.fontawesome.com/e4a8df432c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <style>

    
    @media only screen and (max-width: 550px) {
      .item-images {
        display: inline-block;
        position: relative;
        /* border: 2px solid red; */
        text-align: center;
      }

      .carousel {
        
        
      }

      /* TEXT ON CAROUSEL Images */

      .text-carousel1 {
        font-family: "Montserrat";
        position: relative;
        top: 190px;
        font-size: 20px;
        left: 35%;
        display: inline-block;
      }

      .text-carousel2 {
        font-family: "Montserrat";
        position: relative;
        top: 190px;
        font-size: 20px;

        left: 5%;
        display: inline-block;
      }

      .explore-btn1 {
        font-family: "Montserrat";
        position: relative;
        top: 230px;
        left: 40px;

        font-size: small;
        display: inline-block;
      }

      .explore-btn2 {
        font-family: "Montserrat";
        position: relative;
        top: 230px;
        right: 120px;
        font-size: small;
        display: inline-block;
      }


      /* For phonese ig */

      /* @media only screen and (max-device-width: px) {
      .item-images {
        display: inline-block;
        position: relative;
        border: 2px solid red;
        text-align: center;
      }
      .explore-btn {
        position: relative;
        left: 40%;
      }
      .navbar-brand {
        font-family: ;
        font-size: 32rem;
      }

      .navbar-toggler {
        font-size: 1.5rem;
      }

      .carousel-image {
        height: fit-content;

      }
    } */
    }

    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700&display=swap");
  </style>
</head>

<body>

  <section id="title">
    <!-- Nav Bar -->
    <div class="container-fluid " style="background-color:#343a40;">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >
        <a class="navbar-brand" href="index1.php"  id="obrezka"  style="color:rgb(236, 170, 46);">OBREZKA</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="color:rgb(247, 209, 139);">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color:rgb(247, 209, 139);">
                Tops
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color:rgb(247, 209, 139);background-color: #343a40;">
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">New Arrivals</a>
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Hoodies</a>
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Oversized </a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color:rgb(247, 209, 139);">
                Pants
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #343a40;">
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">New Arivals</a>
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Cargos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color:rgb(247, 209, 139);">
                Accessories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #343a40;">
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Action</a>
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Another action</a>
                <a class="dropdown-item" href="#" style="color:rgb(247, 209, 139);">Something else here</a>
              </div>
            </li>

            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <button style="border: 0px solid white" class="cart-icon button-cart btn btn nav-link my-2 my-sm-0"
                type="button">
                <img class="cart-icon" src="images/cart.png" alt="hello" width="30px" height="30px" />
              </button>
              </li>
            <li class="nav-item">
            <?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="logout.php"  class="nav-link href"  style="color:rgb(247, 209, 139);"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout</a><?php
				}
				else{
					
				}
			?></li><li class="nav-item">
            <?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="ulogin/account.php"  style="text-decoration:none;position:relative;top:9px ;color:rgb(247, 209, 139);" ><i class="fa fa-user" aria-hidden="true">&nbsp;</i><?php echo $data['name'] ?></a><?php
				}
				else{
					?><a href="register.php" class="nav-link href" style="color:rgb(247, 209, 139);">Login/Sign up</a><?php
				}
			?></li>            
          </ul>
        </div>
      </nav>
      
        <!-- Title -->
        <div class="row">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2500">
            <div class="carousel-inner">
              <div class="carousel-item active carousel-item-left">
                <span class="text-carousel1" style="color: white">Jackets and More</span>
                <button type="button" class="explore-btn1 btn btn-outline-light btn-lg">
                  <a href="jackets.html" style="text-decoration: none; color:white">Buy Now!
                </button></a>

                <picture>
                  <source media="(max-width:550px)" srcset="carousel/responsive-img2.jpg" alt="" />
                  <img class="carousel-image d-block w-100" src="carousel/pic3.jpg" alt="First slide" />
                </picture>
              </div>
              <div class="carousel-item carousel-item-next carousel-item-left">
                <span class="text-carousel2">Accessories & More</span>
                <button type="button" class="explore-btn2 btn btn-outline-dark btn-lg">
                  <a href="accessories.html" style="text-decoration: none; color:black">Explore More!
                </button></a>

                <picture>
                  <source media="(max-width:550px)" srcset="carousel/responsive-img1.jpg" alt="" />
                  <img class="carousel-image d-block w-100" src="carousel/pic2.jpg" alt="Second slide" />
                </picture>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>

  <!-- Sliding Section -->

  <!-- Features -->

  <section id="new-arrivals" >
    <h3 style="padding-bottom: 15px">New Arrivals</h3>


    <div class="row">
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="tshirt1.php"><img class="new-arrival-item" src="items/tshirt 1/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="tshirt1.php">
          <h4 class="item-title">Oversized Tee</h4>
        </a>
        <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="cargo1.php"><img class="new-arrival-item" src="items/cargo1/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="cargo1.php">
          <h4 class="item-title">Oversized Cargos</h4>
        </a>
        <span class="markprice">₹1799</span><strike class="cancelled-price">₹2799</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="tshirts2.php"><img class="new-arrival-item" src="items/tshirt 2/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="tshirts2.php">
          <h4 class="item-title">Oversized Tee</h4>
        </a>
        <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="cargo1.php"><img class="new-arrival-item" src="items/cargo1/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="cargo1.php">
          <h4 class="item-title">Oversized Cargos</h4>
        </a>
        <span class="markprice">₹1799</span><strike class="cancelled-price">₹2799</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="tshirt1.php"><img class="new-arrival-item" src="items/tshirt 1/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" href="tshirt1.php" style="text-decoration: none;">
          <h4 class="item-title">Oversized Tee</h4>
        </a>
        <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="cargo1.php"><img class="new-arrival-item" src="items/cargo1/pic1.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="cargo1.php">
          <h4 class="item-title">Oversized Cargos</h4>
        </a>
        <span class="markprice">₹1799</span><strike class="cancelled-price">₹2799</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="tshirts2.php"><img class="new-arrival-item" src="items/tshirt 1/pic5.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="tshirts2.php">
          <h4 class="item-title">Oversized Tee</h4>
        </a>
        <span class="markprice">₹599</span><strike class="cancelled price">₹999</strike>
      </div>
      <div class="item-images col-xl-3 col-md-4 col-12">
        <a class="link-item" href="cargo1.php"><img class="new-arrival-item" src="items/cargo1/pic3.webp" alt=""
            width="300px" height="300px" /></a>
        <a class="link-item" style="text-decoration: none;" href="cargo1.php">
          <h4 class="item-title">Oversized Cargos</h4>
        </a>
        <span class="markprice">₹1799</span><strike class="cancelled price">₹2799</strike>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <footer>

    <div class="container-footer" style="background-color: rgb(240, 240, 240);">
      <div class="row" style="padding-top: 10px;">
        <div class=" footer-col-items col-lg-3">
          <ul class="col1-footer" style="list-style-type: none;">
            <li><a href="#" class="Linklist-item-title">
                <h4> ABOUT US</h4>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6>About Us</h6>
              </a> </li>
            <li><a href="#" class="Linklist-item">
                <h6> Store</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Press</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Terms and Conditions</h6>
              </a></li>
          </ul>
        </div>
        <div class=" footer-col-items col-lg-3">

          <ul class="col2-footer" style="list-style-type: none;">
            <li><a href="#" class="Linklist-item-title">
                <h4> MY ACCOUNT</h4>
              </a></li>
            <li><a href="#" class="Linklist-item" style="text-align: left;">
                <h6>Gift Card</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> New Arrivals</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Sale</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Blog</h6>
              </a></li>

          </ul>
        </div>
        <div class=" footer-col-items col-lg-3">

          <ul class="col3-footer" style="list-style-type: none;">
            <li><a href="#" class="Linklist-item-title">
                <h4> CONTACT US</h4>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Exchanges/Cancellation</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Pricing</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Privacy Policy</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> Cookie Policy</h6>
              </a></li>
            <li><a href="#" class="Linklist-item">
                <h6> The OBREZKA Pleasures Now Giveaway</h6>
              </a></li>
          </ul>
        </div>
        <div class=" footer-col-items col-lg-3">
          <h4 class="Linklist-item-title" style="text-align: center;">STAY CONNECTED</h4>
          <div style="display: inline-block;" class="socials">
            <h1 style="text-align: center; font-size: 30px;">Our Socials</h1>

            <div style="display: inline-block; padding-right: 8px;" style="padding-top: 10px;" class="row-footer">
              <a href="https://www.instagram.com/burhan.khair/"><img class="socials-logo"
                  src="footer-icons/facebook.png"></a>

            </div>
            <div style="display: inline-block; padding-right: 8px;" class="row-footer">
              <a href="https://www.instagram.com/burhan.khair/"><img class="socials-logo"
                  src="footer-icons/twitter.png"></a>

            </div>
            <div style="display: inline-block; padding-right: 8px;" class="row-footer">
              <a href="https://www.instagram.com/burhan.khair/"><img class="socials-logo"
                  src="footer-icons/instagram.png"></a>

            </div>
            <div style="display: inline-block; padding-right: 8px;" class="row-footer">
              <a href="https://www.instagram.com/burhan.khair/"><img class="socials-logo"
                  src="footer-icons/google-plus.png"></a>

            </div>
            <div style="display: inline-block; padding-right: 8px;" class="row-footer">
              <a href="https://www.instagram.com/burhan.khair/"><img class="socials-logo"
                  src="footer-icons/pinterest.png"></a>

            </div>
          </div>
        </div>
      </div>


  </footer>


  <!-- ------------ -->

</body>

</html>