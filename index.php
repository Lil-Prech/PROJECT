<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/input.css" rel="stylesheet">
  <title>BLood Bank</title>

  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  
  <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Jost:ital,
    wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    </head>
<body>
    <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> 
            <div class="container-fluid">
              <!--Navbar Content-->
              <a class="navbar-brand" href="#">One<span>Blood</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Donor_registration.php">Donor Registration</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="request.php">Blood Request</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <div id="d-flex">
                    <a href="login_dashboard.php">
                      <button class="btn">Dashboard</button>
                    </a>
                    <a href="login_signup.php">
                      <button class="btn">Login</button>
                    </a>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
      <!--End of Navbar-->
      <section class="hero">

        <!--Carousel-->
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item ">
              <img src="assets/images/istockphoto-1266746907-612x612.jpg"  class="d-block w-100 c-image" alt="...">
              <div class="carousel-caption top-0 mt-4">
                <h2 class="mt-5 display-4 fw-bolder text-uppercase">Blood donation is the real act of humanity </h2>
                <p class="text-capitalize mt-4">Donate Blood, Donate Smile!</p>
                <button class="btnrqst px-4 py-2 fs-5 mt-5">Donate Blood</button>
              </div>
            </div>
            <div class="carousel-item active">
              <img src="assets/images/blood-drop-hologram-creative-background-blood-donation-concept-charity-medicine_974732-52954.jpg" class="d-block w-100 c-image" alt="...">
              <div class="carousel-caption top-0 mt-4 ">
                <h2 class="mt-5 display-4 fw-bolder text-uppercase">Your drops of blood are the oceans of happiness to others</h2>
                <p class="text-capitalize">Give Blood, Save Life!</p>
                <a href="Donor_registration.html">
                  <button class="btnrqst px-4 py-2 fs-5 mt-5">Donate Blood</button>
                </a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>  
      </div>
        <!--End of Carousel-->  
         <section id="Donate">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <img src="assets/images/istockphoto-1266747084-1024x1024.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Become A Donor</h5>
                  <p class="card-text">To become a donor,You must typically be at least 17 years old and at most 65years old, weigh at least 50kg, and also be in good health at the time of 
                    you donate (You cannot donate if you have a cold, flo, stomach bug or any other infection).
                    <p>You must not donate blood if you do not meet the minimum haemoglobin level for blood donation. </p>
                  </p>
                </div>
                <div class="card-footer">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="assets/images/istockphoto-1338751268-612x612.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Why Donate Blood?</h5>
                  <p class="card-text">Donating blood is a generous act that can save lives. Each donation can help up to three people in need of blood transfusions for surgeries,
                     cancer treatments, and emergencies.. It’s also beneficial for the donor’s health, potentially reducing the risk of depression and contributing to longer life. People donate for various reasons, including altruism, personal connections to causes, or community involvement </p>
                </div>
                <div class="card-footer">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="assets/images/R (1).jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">How your Diffusion helps </h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
         </section>
         <section class="process">
          <div class="oval-container">
            <div class="title">Donation Process</div>
            <div class="oval">
              <p>01 <br> Registration</p>
            </div>
            <ion-icon name="arrow-forward-outline"></ion-icon>
            <div class="oval">
              <p>02 <br> Screening</p>
            </div>
            <ion-icon name="arrow-forward-outline"></ion-icon>
            <div class="oval">
              <p>03 <br> Donation</p>
            </div>
            <ion-icon name="arrow-forward-outline"></ion-icon>
            <div class="oval">
              <p>04 <br> Rest and Refreshment</p>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="left">
              <h2>Why Donate?</h2>
              <ol>
                <li>
                  <b>Lowers risk of heart diseases</b>
                  <p>Excess iron can contribute to the formation of free radicals, which are harmful molecules that can damage cells, including those in the heart.
                    By donating blood, you reduce the iron levels,which  helps minimize oxidative stress and inflammation, both of which are linked to heart disease.  
                  </p>
                </li>
                <li>
                  <b>Improves Emotional welllbeing</b>
                  <p> Knowing that you’re helping save lives can give you a sense of purpose and fulfillment.It also  strengthens your connection to the community and foster a sense of belonging.</p>
                </li>
                <li>
                  <b>Reduce Stress</b>
                  <p> Engaging in altruistic acts like blood donation can trigger the release of endorphins, which are natural stress-relievers and mood enhancers.</p>
                </li>
              </ol>
            </div>
            <div class="right">
              <h2>Current Blood Request</h2>
              <ul>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
                <p>
                  <ion-icon name="heart-outline"></ion-icon>
                  B+,Awah Margeret ,2024-05-13
                </p>
              </ul>
            </div>
          </div>
        </section>
        <div class="card mb-3 " style="max-width: 99%;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="assets/images/istockphoto-637957146-612x612.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Blood Groups</h5>
                <p class="card-text">There are four main blood groups (type of blood) : A, B,AB and O both positive and negative.
                  Your blood group is determined by the genes you inherit from your parents. The characterustics of each blood group are;
                </p>
                <ul>
                  <li>Blood type A contains anti-B antibodies and A antigens in the plasma</li>
                  <li>Blood group B contains anti-A antibodies and B antigens in the plasma</li>
                  <li> Blood type O ha both anti-A and anti-B antibodies in the plasma but no antigens </li>
                </ul>
                <p class="card-text"><small class="text-muted">Its very important to know your blood group!!</small></p>
              </div>
            </div>
          </div>
        </div>
        <section>

       
        
      
      <!--Footer-->
      <footer>
        <svg viewBox="0 0 120 28">
          <defs>
            <mask id="xxx">
              <circle cx="7" cy="12" r="40" fill="#fff" />
            </mask>
            <filter id="goo">
              <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
              <feColorMatrix in="blur" mode="matrix" values="
                1 0 0 0 0  
                0 1 0 0 0  
                0 0 1 0 0  
                0 0 0 13 -9" result="goo" />
              <feBlend in="SourceGraphic" in2="goo" />
            </filter>
            <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
          </defs>
          <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
          <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
          <g class="topball">
            <circle class="ball" cx="110" cy="8" r="4" stroke="none" stroke-width="0" fill="red" />
            <g class="arrow">
              <polyline class="" points="108,8 110,6 112,8" fill="none" />
              <polyline class="" points="110,6 110,10.5" fill="none" />
            </g>
          </g>
          <g class="gooeff">
            <circle class="drop drop1" cx="20" cy="2" r="1.8" />
            <circle class="drop drop2" cx="25" cy="2.5" r="1.5" />
            <circle class="drop drop3" cx="16" cy="2.8" r="1.2" />
            <use id="wave1" class="wave" xlink:href="#carouselExample" x="0" y="1" />
          </g>
        </svg>
        <div class="text-container">
          <ul class="social-icons">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
          </ul>
          <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Team</a></li>
          </ul>
          <p>@2024 One Blood | All Rights Reserved</p>
        </div>
      </footer>

      
      
      
      
    
       
        <!--icons-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--Boostrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--Flowbite-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>