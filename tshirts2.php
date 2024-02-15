
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
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/cart-icon.css" />
  <link rel="stylesheet" href="css/item-page.css">
  <link rel="stylesheet" href="css/size-button.css">

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
      .carousel {
        position: relative;
        left: 30px;

      }

      .socials {
        padding-bottom: 5%;
      }

      .item-image-1 {
        padding-top: 30px;
        text-align: center;
      }

      .item-images {
        display: inline-block;
        position: relative;
        /* border: 2px solid red; */
        text-align: center;
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

    .row {
      position: relative;
      top: 100px;
    }

    .new-arrival-item:hover:hover {
      box-shadow: 0px 0px 20px .2px #464545;
      -ms-transform: scale(1.5);
      /* IE 9 */
      -webkit-transform: scale(1.5);
      /* Safari 3-8 */
      transform: scale(105%);
    }
  </style>
</head>

<body>

<section id="title">
    <!-- Nav Bar -->
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index1.php" id="obrezka" style="color:black;">OBREZKA</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Tops
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">New Arrivals</a>
                <a class="dropdown-item" href="#">Hoodies</a>
                <a class="dropdown-item" href="#">Oversized </a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pants
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">New Arivals</a>
                <a class="dropdown-item" href="#">Cargos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Accessories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>

            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn btn-outline-dark my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <button style="border: 0px solid white" class="cart-icon button-cart btn btn nav-link my-2 my-sm-0"
                type="button">
                <img class="cart-icon" src="images/shopping-cart.png" alt="" width="30px" height="30px" />
              </button>
              </li>
            <li class="nav-item">
            <?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="logout.php"  class="nav-link href" ><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout</a><?php
				}
				else{
					
				}
			?></li><li class="nav-item">
            <?php
				if (isset($_SESSION['uid'])) 
				{
					?><a href="ulogin/account.php"  style="text-decoration:none;position:relative;top:9px;" ><i class="fa fa-user" aria-hidden="true">&nbsp;</i><?php echo $data['name'] ?></a><?php
				}
				else{
					?><a href="login.php" class="nav-link href" >Login/Sign up</a><?php
				}
			?></li>
              
              <!-- Here there we will implement an icon of Shopping cart -->
              
        
            
          </ul>
        </div>
      </nav>


      <!-- Item Page -->
      <div class="row">
        <div class="col-lg-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="500">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="item-page-carouselitem-page-carousel d-block w-100" src="items/tshirt 2/pic1.webp"
                  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="item-page-carousel d-block w-100" src="items/tshirt 2/pic2.webp" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="item-page-carousel d-block w-100" src="items/tshirt 2/pic3.webp" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="item-page-carousel d-block w-100" src="items/tshirt 2/pic4.webp" alt="Third slide">
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
        <div class="item-image-1 col-lg-6">
          <h4>OBREZKA</h4>
          <p style="color: rgb(155, 151, 151);">White Oversized Tee</p>
          <p>4.5
            <img src="items/star.png" alt="" width="15px" height="15px" style="position: relative; bottom:2px;"> |
            268 Ratings
          </p>
          <hr style="color: rgb(131, 128, 128);">
          <h6 style="display: inline-block;">₹1799</h6>

          <span style="color: grey; position: relative; left: 5px;">MRP</span><s
            style="color: grey; position: relative; left: 10px;"> ₹2799</s>
          <i style="display: block;"><b style="color: rgb(0, 121, 36);">inclusive of all tax</b></i>

          <strong style="position: relative; top: 14px; font-size: larger;">SELECT SIZE</strong>
          <a href="#"
            style="font-size:large; position: relative; top: 14px; left:15px; text-decoration: none; color: rgb(116, 116, 116); font-weight: 700;">
            Size Chart ></a>
          <div class="size-buttons">
            <button class="button button5">M</button>
            <button class="button button5">L</button>
          </div>
          <button type="button" class="add-to-cart btn btn-danger btn-lg"
            onMouseOver="this.style.backgroundColor='rgb(201, 172, 110)'"
            onMouseOut="this.style.backgroundColor='rgb(230, 192, 110'"
            style="position: relative; top:5px; background-color: rgb(248, 207, 120); border: 1px solid rgb(201, 172, 110); color: black;"><img
              src="images/bag.png" alt="" height="25px"
              style="padding-right: 4px; position: relative; color: rgb(238, 222, 150); bottom: 3px; "> Add to
            Bag</button>
          <button type="button" class="btn btn-outline-warning btn-lg "
            onMouseOver="this.style.backgroundColor='rgb(201, 172, 110)'"
            onMouseOut="this.style.backgroundColor='white'" style="position: relative; top:5px;">Buy Now</button>
        </div>

      </div>
      
      <!-- You may also like section -->


      <div class="row" style="display: block;">
                <div class="ymal" style="text-align:center;padding-top: 2%;padding-bottom: 2%;"><span style="text-align:center;font-size: x-large;position: relative;padding-top: 10px; font-family: 'Montserrat';font-weight: 1400; border-bottom: 1px solid #464545;">You may also like..</span></div>
              </div>
              <div class="row">
                <div class="item-images col-xl-3  col-12">
                  <a class="link-item" href="tshirt1.php"><img class="new-arrival-item" src="items/tshirt 1/pic1.webp" alt=""
                      width="300px" height="300px" /></a>
                  <a class="link-item" style="text-decoration: none;" href="tshirt1.php">
                    <h4 class="item-title">Oversized Tee</h4>
                  </a>
                  <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
                </div>
                <div class="item-images col-xl-3 col-12">
                  <a class="link-item" href="cargo1.php"><img class="new-arrival-item" src="items/cargo1/pic1.webp" alt=""
                      width="300px" height="300px" /></a>
                  <a class="link-item" style="text-decoration: none;" href="cargo1.php">
                    <h4 class="item-title">Oversized Cargos</h4>
                  </a>
                  <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
                </div>
                <div class="item-images col-xl-3  col-12">
                  <a class="link-item" href="tshirts2.php"><img class="new-arrival-item" src="items/tshirt 2/pic1.webp" alt=""
                      width="300px" height="300px" /></a>
                  <a class="link-item" style="text-decoration: none;" href="tshirts2.php">
                    <h4 class="item-title">Oversized Tee</h4>
                  </a>
                  <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
                </div>
                <div class="item-images col-xl-3  col-12">
                  <a class="link-item" href="tshirts2.php"><img class="new-arrival-item" src="items/tshirt 2/pic1.webp" alt=""
                      width="300px" height="300px" /></a>
                  <a class="link-item" style="text-decoration: none;" href="tshirts2.php">
                    <h4 class="item-title">Oversized Tee</h4>
                  </a>
                  <span class="markprice">₹599</span><strike class="cancelled-price">₹999</strike>
                </div>
        
        
              </div>
              
                
            </div>
      <!-- Footer -->
      <div class="row"
        style="background-color: rgb(240, 240, 240); position: relative; margin-top: 40px; padding-top: 30px;">
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
</body>




</html>