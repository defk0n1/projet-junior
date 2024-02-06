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
            
            <a href="#" class="logo">catalogue</a>
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
             
            <a href="#" class="active">Home</a>
        
            <a href="#">catalogue</a>
            <a href="#">Contact</a>
            
           
            
            
            
            </nav>
        
    </header>
    <div class="content">
        <div class="vid-wrapper">
          <video autoplay loop muted plays-inline class="back-video">
                <source src="avideo.mp4" type="video/mp4">
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
                   
        </div>

        
          <div class="company-section">
            <img src="assets/your-company-image.png" alt="Company Image" class="company-image">
            <div class="company-text">       
              <p>Our company is committed to providing high-quality products/services to our clients. We value innovation, teamwork, and customer satisfaction.</p>
              <button class="shop-now">BROWSE</button>
            </div>
            
          </div>
     
      <div class="container mt-5">
          <h3 class="display-2 text-center brand-head">Begin Your Journey</h3>
      
          <div class="row mt-4">
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/bmw.png" alt="BMW Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/harley.png" alt="Harley-Davidson Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/honda.png" alt="Honda Logo" class="img-fluid img-logo" id="small-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              
              
              
          </div>
      
          <div class="row mt-4 " id="lastligne">
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/suzuki.png" alt="Suzuki Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/kawasaki.png" alt="Kawasaki Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
              <div class="col-lg-4 col-md-6 text-center">
                  <a href="#" target="_blank">
                      <img src="assets/yamaha.png" alt="Yamaha Logo" class="img-fluid img-logo" data-aos="fade-up"
                      data-aos-delay="10"
                      data-aos-duration="500">
                  </a>
              </div>
          </div>
      </div>
      
      
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
      <script>
          // Wait for the document to be ready
          $(document).ready(function () {
              // Show/hide scroll button based on scroll position
              $(window).scroll(function () {
                if ($(this).scrollTop() < 600) { // Reduce the value to make the button appear sooner (changer la valeur 600 aprés)
                  $('#scrollToBottomBtn').fadeIn();
                } else {
                  $('#scrollToBottomBtn').fadeOut();
                }
              });
            
              // Smooth scroll to the bottom
              $('#scrollToBottomBtn').click(function () {
                $('html, body').animate({ scrollTop: $(document).height() }, 'slow');
                return false;
              });
            });
        </script>
      


</body>
</html>
