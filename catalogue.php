<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Catalogue</title>

</head>
<body>
    <?php 
    $sp="See Products";
    $pn="Product Name";
    $c="Condition: XXX";
    $m="Mileage: XXX";
    $p="Price: XXX"
    
    ?>
    <div id="animation">
    <div class="row text-start align-items-center gy-5 my-5">
    <div class="col-12 col-md-6"><img src="P90329061_highRes_bmw-motorrad-suit-pr.jpg"class="w-100 h-100 slide-image " alt=""></div>
    <div class="col-12 col-md-6">
        <div>
            <h2 class="display-4">BMW</h2>
            <p>BMW Motorrad, the motorcycle division of BMW, is renowned for blending performance, technology, and luxury. Offering a diverse lineup, from sport bikes to adventure models, BMW motorcycles are known for innovative engineering and distinctive design.</p>
        </div>
    </div>
    </div>
    <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
    <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                    <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
        </div>
  
<?php } ?>
    <div class="row text-start align-items-center gy-5 my-5">
        <div class="col-12 col-md-6">
            <div>
                <h2 class="display-4">Harley-Davidson</h2>
                <p>Harley-Davidson, an iconic American manufacturer since 1903, epitomizes freedom and individuality with its classic cruiser-style motorcycles. Its models, including touring bikes and custom builds, symbolize a rich heritage and the spirit of the open road.</p>
            </div>
        </div>
        <div class="col-12 col-md-6"><img src="harley.jpg" class="w-100 h-100 slide-image " alt=""></div>
    </div>
    <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
    <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                        <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
  
<?php } ?>
    <div class="row text-start align-items-center gy-5 my-5">
        <div class="col-12 col-md-6"><img src="honda.png"class="w-100 h-100 slide-image" alt=""></div>
        <div class="col-12 col-md-6">
            <div>
                <h2 class="display-4">HONDA</h2>
                <p>Honda Motor Company, renowned for engineering excellence, offers a wide range of motorcycles. From commuter-friendly scooters to high-performance sport bikes and touring motorcycles, Honda caters to diverse rider preferences.</p>
            </div>
        </div>
        </div>
        <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
        <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                        <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
  
<?php } ?>
        <div class="row text-start align-items-center gy-5 my-5">
            <div class="col-12 col-md-6">
                <div>
                    <h2 class="display-4">SUZUKI</h2>
                    <p>Suzuki Motor Corporation, a Japanese stalwart, is known for exceptional performance and affordability. Suzuki's diverse lineup includes sport bikes, cruisers, adventure models, and off-road motorcycles, showcasing engineering excellence and innovation.</p>
                </div>
            </div>
            <div class="col-12 col-md-6"><img src="suzuki.jpg" class="w-100 h-100 slide-image " alt=""></div>
        </div>
        <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
        <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                        <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
  
<?php } ?>
    
        <div class="row text-start align-items-center gy-5 my-5">
            <div class="col-12 col-md-6"><img src="kawasaki.jpg"class="w-100 h-100 slide-image " alt=""></div>
            <div class="col-12 col-md-6">
                <div>
                    <h2 class="display-4">KAWASAKI</h2>
                    <p>Kawasaki, a prominent Japanese manufacturer, is celebrated for its powerful and innovative motorcycles. With a diverse range encompassing sport bikes, cruisers, and off-road machines, Kawasaki delivers exhilarating performance and cutting-edge technology.</p>
                </div>
            </div>
            </div>
            <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
            <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                        <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
  
<?php } ?>
            <div class="row text-start align-items-center gy-5 my-5">
                <div class="col-12 col-md-6">
                    <div>
                        <h2 class="display-4">YAMAHA</h2>
                        <p>Yamaha Motor Company, a Japanese giant, excels in innovation, reliability, and versatility. Yamaha's range spans agile sport bikes to rugged adventure models and efficient scooters, offering exhilarating riding experiences.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6"><img src="yamaha.webp" class="w-100 h-100 slide-image " alt=""></div>
            </div>
            <h2 class="class display-6 py-5 text-center"><?php echo($sp) ?></h2>
            <?php  
for ($x = 0; $x < 2; $x++) { ?>
    
    
	<div class="d-flex justify-content-between align-items-center flex-lg-row my-5" id="new">
    <?php for ($i = 0;$i< 3;$i++) { ?>
            <div class="card m-2">
                <a href="">
                    <img src="insert.jpg" class="card-img-top" height="300" alt="Product">
                </a>
                <div class="card-body">
                    <p class="card-text fw-bold">
                        <?php echo($pn) ?>
                    </p>
                    <small class="text-secondary"><?php echo($c) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($m) ?></small>
                    <br>
                    <small class="text-secondary"><?php echo($p) ?></small>
                </div>
            </div>
    <?php } ?>
        </div>
  
<?php } ?>
<style>
    .slide-image{
        overflow:hidden;
        opacity: 0;
        transition: opacity 1s;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var slideImages = document.querySelectorAll(".slide-image");

    window.addEventListener("scroll", function() {
        slideImages.forEach(function(img) {
            if (isElementInViewport(img)) {
                img.style.opacity = 1; // Make image visible when it enters the viewport
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});
</script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
