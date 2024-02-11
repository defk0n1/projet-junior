<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="catalogue.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style> <?php include 'catalogue.css'; ?> </style>
    <style> <?php include 'main.css'; ?> </style>
    <title>Catalogue</title>

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
                a{
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
                <a href="#">Catalogue</a>
                <a href="#">Contact</a>
                <i class='bx bx-shopping-bag' id="cart-icon" ></i>
                <!-- Cart -->
                <div class="cart">
                    <h2 class="cart-title">Your Cart</h2>
                    <!-- Content -->
                    <div class="cart-content">
                        
                    </div>
                    <!-- Total -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">$0</div>
                    </div>
                    <!-- Buy Button -->
                    <form method="post" action="checkout.php">
                        <input type="hidden" name="total_price" id="total_price" value="0">
                        <button type="submit" class="btn-buy">Buy Now</button>
                    </form>


                    <!-- Cart Close -->
                    <i class='bx bx-x' id="close-cart"></i>
                </div>
            </nav>
        
    </header> 
        
         <section class="main-home">
            <div class="main-text">
                
                <div><h5 class="letter">MOTOS COLLECTION</h5></div>
                <div> <h1 class="word">NEW <br> COLLECTION <br>TO DISCOVER</h1></div>
                <div><p >DO NOT HESITATE </p></div>
                
                <a href="#" class="main-btn">SHOP NOW<i class='bx bx-right-arrow-alt'></i></a>
               
            </div>


         </section>
        


    <?php 
    $sp="See Products";
    $pn="Product Name";
    $c="Condition: XXX";
    $m="Mileage: XXX";
    $p="Price: XXX"
    ?>
    
    <div class="brand">
            <div class = "brand-image"><img src="assets/P90329061_highRes_bmw-motorrad-suit-pr.jpg" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>BMW</h1>
                <p>BMW Motorrad, the motorcycle division of BMW, is renowned for blending performance, technology, and luxury. Offering a diverse lineup, from sport bikes to adventure models, BMW motorcycles are known for innovative engineering and distinctive design.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 6;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">BMW 1000CC</h1>
                <p class="product-condition">NEW</p>
                <p class="product-mileage">-</p>
                <p class="product-price">$1200</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
    </div>
    <div class="brand">
            <div class = "brand-image"><img src="assets/harley.jpg" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>Harley-Davidson</h1>
                <p>Harley-Davidson, an iconic American manufacturer since 1903, epitomizes freedom and individuality with its classic cruiser-style motorcycles. Its models, including touring bikes and custom builds, symbolize a rich heritage and the spirit of the open road.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 4;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">HARLEY</h1>
                <p class="product-condition">USED</p>
                <p class="product-mileage">52</p>
                <p class="product-price">$500</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
    </div>
    
    <div class="brand">
            <div class = "brand-image"><img src="assets/honda1.png" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>HONDA</h1>
                <p>Honda Motor Company, renowned for engineering excellence, offers a wide range of motorcycles. From commuter-friendly scooters to high-performance sport bikes and touring motorcycles, Honda caters to diverse rider preferences.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 4;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">PRODUCT NAME</h1>
                <p class="product-condition">Condition: XXX</p>
                <p class="product-mileage">Mileage: XXX</p>
                <p class="product-price">Price: XXX</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
    </div>
    <div class="brand">
            <div class = "brand-image"><img src="assets/suzuki.jpg" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>SUZUKI</h1>
                <p>Suzuki Motor Corporation, a Japanese stalwart, is known for exceptional performance and affordability. Suzuki's diverse lineup includes sport bikes, cruisers, adventure models, and off-road motorcycles, showcasing engineering excellence and innovation.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 4;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">PRODUCT NAME</h1>
                <p class="product-condition">Condition: XXX</p>
                <p class="product-mileage">Mileage: XXX</p>
                <p class="product-price">Price: XXX</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
    </div>
    <div class="brand">
            <div class = "brand-image"><img src="assets/kawasaki.jpg" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>KAWASAKI</h1>
                <p>Kawasaki, a prominent Japanese manufacturer, is celebrated for its powerful and innovative motorcycles. With a diverse range encompassing sport bikes, cruisers, and off-road machines, Kawasaki delivers exhilarating performance and cutting-edge technology.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 4;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">PRODUCT NAME</h1>
                <p class="product-condition">Condition: XXX</p>
                <p class="product-mileage">Mileage: XXX</p>
                <p class="product-price">Price: XXX</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
    </div>
    <div class="brand">
            <div class = "brand-image"><img src="assets/yamaha.webp" alt="IMAGE"></div>
            <div class="brand-synopsis">
                <h1>YAMAHA</h1>
                <p>Yamaha Motor Company, a Japanese giant, excels in innovation, reliability, and versatility. Yamaha's range spans agile sport bikes to rugged adventure models and efficient scooters, offering exhilarating riding experiences.</p>
                <button class="browseproducts"><a href="#products">BROWSE</a></button>
            </div>
           
    </div>
    <div class="brand-products" id="products">
    <?php for ($i = 0;$i< 4;$i++) { ?>
        <div class="brand-product"  data-aos="fade-down" data-aos-duration="3000">
            <img id="product-img" src="assets/insert.jpg" alt="product" >
            <div class="product-desc">
                <h1 class="product-name">PRODUCT NAME</h1>
                <p class="product-condition">Condition: XXX</p>
                <p class="product-mileage">Mileage: XXX</p>
                <p class="product-price">Price: XXX</p>
                <button class="add-cart" style="color:white">Buy</button>
            </div>
        </div>
    <?php } ?>    
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
<style>
    .slide-image{
        border-radius: 50px;
        overflow:hidden;
    }
</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
