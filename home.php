<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">  
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    *{
  margin: 0;
  padding: 0;
  -webkit-font-smoothing: antialiased;
  scroll-behavior: smooth;
  


}

.nav-wrapper{
  width: 100%;
  background-color:transparent;
  padding: 0;
  position: relative;


}
 .nav-list
 {
  height: 13vh;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  gap:10%;
  width: 100%;
  position: fixed;
  padding-top: 35px;
  padding-bottom: 50px;
  transition: background-color 0.5s;
  background-color:#0000ad;
  text-decoration: solid;
  
  

  

 }


 .nav-list:hover{
  background-color: rgb(255, 0, 0);
  

 }

 .nav-elt a{
  text-align: center;
  height: 100%;
  min-width: 30%;
  color: rgb(255, 0, 0);
  text-decoration: none;
  font-size: 20px;
  font-family: 'Roboto Condensed', sans-serif;


  
 }

 .nav-elt a:hover{
  text-decoration: none;
  color: rgb(255, 255, 255);
  
  
 }




 .logo img{
  width:40%;
  padding-top: 15vh;
  margin: 0;
  
 }

 
 







.back-video{
  width: 100%;
  height: inherit;
  position: absolute;
  object-fit: cover;
  z-index: -100;
}

 


.vid-wrapper{
  background: linear-gradient(0deg, rgb(0, 0, 0) 0%, rgba(255, 255, 255, 0.463) 100%);
  height:100vh;
  width:100%;
  position: relative;
  display: flex;
  justify-content:start;
  align-items: center;
  text-align: center;
  flex-direction: column;
  


}

.promo-text {
  color: rgb(255, 255, 255);
  font-family: 'Roboto Condensed', sans-serif;
  /* font-family: 'Archivo Narrow', sans-serif; */
  font-size: larger;
  width:80%;
  /* margin-top: 5%;
  margin-bottom: 0%; */
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-direction: column;
   
}

::selection{
  background: rgb(255, 0, 0);
  
}

.promo-text h1{
  font-family: "Bebas Neue";
  font-weight: bold;
  font-size: 100px;
  text-shadow: 2px 2px 5px red;
  margin-bottom: 0;
  
  }
.promo-text strong{
  font-weight: bolder;
  text-shadow: -1px -2px 2px rgba(0, 0, 0, 1),-1px 1px 2px rgba(0, 0, 0, 1);  

}
.promo-text h2{
  letter-spacing: 0px;
  font-weight:400; 
  font-style: bold;
  margin-bottom: 0;
}








.company-section{
  background-color: whitesmoke;
  min-height: 100vh;
  min-width: 100vh;
  margin-top:0px ;
  gap: 5vh;
  
  
}



.img-logo {
  max-width: 50%;
  max-height: 8rem;
  height: auto;
  margin-bottom: 2rem;
  margin-top: 2rem;
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}

.img-logo:hover {
  transform: scale(1.3);
  
}
.display-2 {
  margin-bottom: 5rem;
}
#small-logo{
  width: 60%; 
  height: auto;
  
}


.img-fluid {
  max-width: 100%;
  height: auto;
}

.text-center {
  text-align: center;
}

@media (max-width: 767.98px) {
  .img-logo {
      max-width: 50%;
  }
}
.company-section {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  /* margin: 50px 0; */
  height: 100vh;
}


.company-image {
  /* flex: 1; */
  max-width: 50%;
  /* border-radius: 8px; */
  margin-left: 5%;

  
}

.company-text{
  margin-right: 10vw;
  color: black;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 30px;
  display: flex;
  align-items: center;
  flex-direction: column;
}

/* #lastligne {
  padding-bottom: 5rem;

} */


.shop-now{
  margin-top: 1.5%;
  background: none;
  font-family: 'Roboto Condensed', sans-serif;
  color: #000000;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  border: solid #000000 2px;
  border-radius: 4px;
}
  
  
.shop-now:hover {
    background: #ffffff;
    text-decoration: none;
    color:rgb(0, 0, 0);
  }

.brand-head{
  font-family: 'Roboto Condensed', sans-serif;



}



</style>


</head>
<body>
    
       
    
   <div class="content">
        <div class="vid-wrapper">
          <video autoplay loop muted plays-inline class="back-video">
                <source src="avideo.mp4" type="video/mp4">
          </video>
          <div class="nav-wrapper">
            <!-- <div class="nav-logo">
            </div> -->
            <div class="nav-list">
                <div class="nav-elt"><a href="#" class="link">HOME</a></div>
                <div class="nav-elt"><a href="#" class="link">ABOUT</a></div>
                <div class="nav-elt"><a href="#" class="link">BROWSE</a></div>
                <div class="nav-elt"><a href="#" class="link">CONTACT</a></div>

            </div>
        </div>
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