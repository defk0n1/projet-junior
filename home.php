<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style><?php include 'home.css' ; ?> </style>
</head>
<body>
<header class="header">
            
            <a href="#" class="logo">PLACEHOLDER</a>
            <div>
            <input type="search" id="search" value="" onchange="ouvrirpage()" >
            <a href="#"> <i class='bx bx-search-alt-2'></i></a>
         
            <style>
              #search{
                width: 200px;
                   border-radius:30px;
                    border:1px solid black;
                      }
                .header a{
                  color: rgb(255, 255, 255);
                }
            </style>
             </div>
            <script>
              function ouvrirpage(){
                var a=document.getElementById("search").value;
                if(a=='motos'){
                  window.open("/index.html");
                }

              }
            </script>
          
            <nav class="navbar">
             
            <a href="home.php" class="active">Home</a>
        
            <a href="catalogue.php">Catalogue</a>
            <a href="crud_interface.php">Contact</a>
            
           
            
            
            
            </nav>
        
    </header>
    <div class="content">
        <div class="vid-wrapper">
          <video autoplay loop muted plays-inline class="back-video">
                <source src="assets/video.mp4" type="video/mp4">
          </video>
          <!-- <div class="nav-wrapper">
            <div class="nav-logo">
            </div>
            <div class="nav-list">
                <div class="nav-elt"><a href="#" class="link">HOME</a></div>
                <div class="nav-elt"><a href="#" class="link">ABOUT</a></div>
                <div class="nav-elt"><a href="#" class="link">BROWSE</a></div>
                <div class="nav-elt"><a href="#" class="link">CONTACT</a></div>

            </div>
        </div> -->
            <div class="logo"><img src="assets/logo.png" alt="Logo"></div>
          <div class="promo-text"><h1>REV UP YOUR RIDE</h1>
                <h2>Discover the thrill of the open road with our exclusive selection of <strong>top-notch motorbikes.</strong>
                  we have everything you need to fuel your passion for adventure</h2>  
          </div>
        
          </div>
        
        <div class="background-image"></div>
        </div>

        
          <div class="company-section">
            <img src="assets/your-company-image.png" alt="Company Image" class="company-image">
            <div class="company-text">       
              <p>Our company is committed to providing high-quality products/services to our clients. We value innovation, teamwork, and customer satisfaction.</p>
              <a href="home.php#brands_begin">
                <button class="shop-now" >BROWSE</button>
                </a>
            </div>
            
          </div>
     
      <div class="container mt-5">
          <h3 class="display-2 text-center brand-head" id="brands_begin">Begin Your Journey</h3>
      
          <div class="row mt-4" >
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_bmw" >
                      <img src="assets/bmw.png" alt="BMW Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_harley" >
                      <img src="assets/harley.png" alt="Harley-Davidson Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_honda" >
                      <img src="assets/honda.png" alt="Honda Logo" class="img-fluid img-logo" id="small-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              
              
              
          </div>
      
          <div class="row mt-4 " id="lastligne">
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_suzuki" >
                      <img src="assets/suzuki.png" alt="Suzuki Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="4"
                      data-aos-duration="300">
                  </a>
              </div>
              
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_yamaha" >
                      <img src="assets/kawasaki.png" alt="Kawasaki Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="4"
                      data-aos-duration="300">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="catalogue.php#target_yamaha" >
                      <img src="assets/yamaha.png" alt="Yamaha Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="4"
                      data-aos-duration="300">
                  </a>
              </div>
          </div>
      </div>
      <section id="footer">
        <div class="containerr">
            <div class="contentt">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">address</div>
                        <div class="text-one">3500 Deer Creek Road
                            Palo Alto,</div> 
                        <div class="text-one">CA 94304</div>    
                        <div class="text-one">USA</div> 
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">phone number</div>
                        <div class="text-one">+216 95 904 180 </div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">email</div>
                        <div class="text-one">@gmail.tn </div>
                    </div>
                    
                </div>
                <div class="right-side">
                    
                    <p>Your privacy is a priority for us. Discover how we handle your information responsibly by reviewing our Privacy Policy. We are committed to transparency and safeguarding your data throughout your interaction with our services.</p>
                    <p id="#"> <strong>Privacy Policy</strong></p>
                    <br>
                    
                    
                    <div class="topic-text">Join Our Newsletter Now </div>
                    <p>Enjoy our newsletter to stay updated with the latest news and special sales. Lets your email address here!</p>
                    <form action="#" >
                    
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email">
                        </div>
                    
                        <div class="button">
                            <input type="button" value="Sent Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="last">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>

            </div>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-linkedin"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            
            <p class="copyright">© 2024</p>   
        </div>
    </section>
      
      
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
      <script>
          AOS.init();
          const aosElements = document.querySelectorAll('[data-aos]');
          
          aosElements.forEach(element => {
              element.addEventListener('mouseenter', () => {
                  element.setAttribute('data-aos', 'false'); // Change to the desired AOS animation type
                  AOS.refresh(); // Refresh AOS to apply the new animation
              });
      
              element.addEventListener('mouseleave', () => {
                  element.setAttribute('data-aos', 'fade-up'); // Disable AOS on hover out
                  AOS.refresh();
              });
          });
      </script>
      
      


</body>
</html>
