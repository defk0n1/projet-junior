<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
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
        
            <a href="#">catalogue</a>
            <a href="#">Contact</a>
            
           
            
            
            
            </nav>
        
    </header>
</body>
</html>
