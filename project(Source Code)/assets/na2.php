<!-- women jutti -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daam - eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/cooltext418341805884776.gif" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="css/sf.css">
</head>
<body>
     <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - ₹55
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="inr">INR &#8377;</option>
            <option value="usd">USD &dollar;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>
            <option value="hin">Hindi</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <a href="https://cooltext.com"><img src="https://images.cooltext.com/5617581.png" width="235" height="90" alt="Daam" /></a>
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <!-- product -->
    <section id="projects" class="lob container mt-4 justify-between justify-center">
        <div class="card mx-auto mb-3" style="max-width: 900px;">
            <div class="content row g-0">
              <div class="col-md-4">
                <img src="./images/products/clothes-2.jpg" style="height: 700px;" class="lap img-fluid rounded-start" alt="..." >
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <div class="showcase-content ">

                        <a href="#" class="showcase-category card-title">Casual</a>
      
                        <a href="#">
                          <h5 class="card-title">Girls pnk Embro design Top</h5>
                        </a>
      
                        <div class="showcase-rating he" style="display:flex ; margin-left: 16rem;">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-half-outline"></ion-icon>
                          </div>
      
                          <div class="price-box">
                            <p class="price">₹610.00</p>
                            <del>₹900.00</del>
                          </div>
                          <form action="na2.php" method="POST" >
                          <?php
                          $userEmail = ""; //First we leave this field blank
                          if(isset($_POST['Purchase'])){ //if Purchase btn is clicked
                            $userEmail = $_POST['email']; //getting USer Email
                            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating User Entered Email
                              $subject = "Thanks For Purchasinging From Us - DAAM";
                                  $message ="Thank You for purchasing 'Girls pnk Embro design Top' Worth ₹610.00 .
To confirm this purchase Kindly reply the following details in this mail only
1.NAME, 2.DOB, 3.MOBILE NUMBER, 4.ADDRESS, 5.PINCODE, 6.Email.
Once we get the details as reply of this mail your product confirmation is done.
we'll soon send you the tracking details via mail only 

NOTE:
1. We only accept COD mode of payment due to some technical difficulty. We Apologise.
2. Please reply to this email with the specifics, not via another email.

Waiting For your response.
TEAM DAAM ";
                                  $sender = "From: tectec9060@gmail.com"; //same mail which i put in XAMPP while configuring it.
                                  if(mail($userEmail,$subject ,$message, $sender)){ //PHP Function to send mail
                                    ?>
                                    <!--show an success message if mail sent successfully-->
                                    <div class="alert success">Thanks for Purchasing From Us.</div>
                                    <?php
                                    $userEmail = ""; // we'll again leave this field blank once mail sent.
                                  }else{
                                    ?>
                                  <!--show an error message if somehow mail can't sent-->
                                  <div class="alert error">Failed while sneding your Email!</div>
                                  <?php
                                }
                              }else{
                                ?>
                                <!--show an  error message if mail not valid-->
                                <div class="alert error"><?php $userEmail ?>is not a valid email</div>
                                <?php
                              }
                            }
                            ?>
                            <div class="field">
                              <input type="text" name="email" placeholder="Email Address to which purchase mail has to be sent">
                            </div>
                            <div class="field btn">
                              <input type="Submit" name="Purchase" value="Purchase">
                            </div>
                          </form>
                        </div>
      
                      </div>
                  <!-- <h5 class="card-title">Womens Ghaghra</h5>
                  <p class="card-text">This project is a desktop application that uses the fingerprint of users for authentication. Since each individual has a unique fingerprint, this method of using fingerprint as a means of authentication to access your ATM is safer and more secure than using an ATM card. Users need not carry their ATM cards with them at all times – they can use their fingerprint to access ATM services. </p> -->
                  </div>
              </div>
            </div>
          </div>
    </section>


  <!--
    - FOOTER
  -->

  <footer>

    <div class="footer-category">

      <div class="container">

        <h2 class="footer-category-title">Brand directory</h2>

        <div class="footer-category-box">

          <h3 class="category-box-title">Fashion :</h3>

          <a href="#" class="footer-category-link">T-shirt</a>
          <a href="#" class="footer-category-link">Shirts</a>
          <a href="#" class="footer-category-link">shorts & jeans</a>
          <a href="#" class="footer-category-link">jacket</a>
          <a href="#" class="footer-category-link">dress & frock</a>
          <a href="#" class="footer-category-link">innerwear</a>
          <a href="#" class="footer-category-link">hosiery</a>

        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">footwear :</h3>
        
          <a href="#" class="footer-category-link">sport</a>
          <a href="#" class="footer-category-link">formal</a>
          <a href="#" class="footer-category-link">Boots</a>
          <a href="#" class="footer-category-link">casual</a>
          <a href="#" class="footer-category-link">cowboy shoes</a>
          <a href="#" class="footer-category-link">safety shoes</a>
          <a href="#" class="footer-category-link">Party wear shoes</a>
          <a href="#" class="footer-category-link">Branded</a>
          <a href="#" class="footer-category-link">Firstcopy</a>
          <a href="#" class="footer-category-link">Long shoes</a>
        </div>

        <div class="footer-category-box">
          <h3 class="category-box-title">jewellery :</h3>
        
          <a href="#" class="footer-category-link">Necklace</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
          <a href="#" class="footer-category-link">Pendants</a>
          <a href="#" class="footer-category-link">Crystal</a>
          <a href="#" class="footer-category-link">Bangles</a>
          <a href="#" class="footer-category-link">bracelets</a>
          <a href="#" class="footer-category-link">nosepin</a>
          <a href="#" class="footer-category-link">chain</a>
          <a href="#" class="footer-category-link">Earrings</a>
          <a href="#" class="footer-category-link">Couple rings</a>
        </div>

      </div>

    </div>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              Kotri Kalan, Ashta, Near, Indore Road,
              Bhopal, Madhya Pradesh 466114
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+916079354656" class="footer-nav-link">(+91)60793-68XXX</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">DAAM</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script type="text/javascript" src="./js/vanilla-tilt.js"></script>

   <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".card"), {
     max: 6,
     speed: 5000
     });
 </script>

</body>
</html>