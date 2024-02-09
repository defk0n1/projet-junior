<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalogue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style> <?php include 'catalogue.css'; ?> </style>
    <title>Document</title>
    <style>
        #footer {
            box-sizing: border-box;
            min-height: 730px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-color:rgb(4, 4, 4);
            font-family: "Poppins" , sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            border: none;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        .container{
            width: 60%;
            background: #dcdada;
            height: 330px;
            border-radius: 6px;
            padding: 10px 40px 20px 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 10 px;
        }
        .container .content{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .container .content .left-side{
            width: 25%;
            height: 80%;   
        }
        .content .left-side .details{
            margin: 14px;
            text-align: center;
        }
        .content .left-side .details i{
            font-size: 30px;
            color: #ec6868;
            margin-bottom: 10px;
        }
        .content .left-side .details .topic{
            font-size: 18px;
            font-weight: 500;
        }
        .content .left-side::before{
            content: '';
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
            font-size: 14px;
            color: #6d6d72;
        }
        .container .content .right-side {
            width: 75%;
            height: 100%; 
            margin-left: 75px;  
        }
        .content .right-side .topic-text {
            font-size: 30px;
            font-weight: 600;
            color:#ee5555 ;
            text-align:center;   
            font-family:"Playfair Display", serif; 
            text-transform:uppercase;
            letter-spacing:1px;
        }

        .right-side .input-box{
            height:50px ;
            width: 100%;
            margin: 12px 0;
        }
        .right-side .input-box input{
            height: 100%;
            width: 70%;
        }


        .right-side .button input[type="button"]{
            color: #fff;
            font-family: 18px;
            background-color: #ee5555;
            border-radius: 6px ;
            padding: 8px 16px;
            cursor: pointer;
        }
        .button input[type="button"]:hover{
            background-color: #bec4f7;
        }
        .last {
            padding:5px 0;
            color:#ffffff;
            position:absolute;
            bottom: 0px;
            min-height: 60px;
            width: 100%;
            background: #EC3C2C    ;
            padding: 20px 50px;
            
        }
        .last .social{
            text-align:center;
            padding-bottom:5px;
        }
        .last .social > a {
            font-size:24px;
            width:40px;
            height:40px;
            line-height:40px;
            display:inline-block;
            text-align:center;
            border-radius:50%;
            border:1px solid #fff;
            margin:0 10px;
            color:inherit;
            opacity:0.75;
        }
        .last .social > a:hover {
            opacity:1.5;
        }

        .last .copyright {
            margin-top:2px;
            text-align:center;
            font-size:15px;
            color:black;
            margin: bottom 10px;
        }
        .last .wave{
            position:absolute;
            top: -60px;
            left: 0;
            width: 100%;
            height: 60px;
            background: url(redwave.png);
            background-size: 1000px 80px;

        }
        .last.wave#wave1
        {
            z-index: 1000;
            opacity: 1;
            bottom: 0;
            animation: animateWave_2 4s linear infinite;
        }
        .last .wave#wave2
        {
            z-index: 999;
            opacity: 0.5;
            bottom: 10px;
            animation: animateWave 4s linear infinite;
        } 
        .last .wave#wave3
        {
            z-index: 1000;
            opacity: 0.3;
            bottom: 15px;
            animation: animateWave_2 3s linear infinite;
        }
        .last .wave#wave4
        {
            z-index: 999;
            opacity: 0.7;
            bottom: 20px;
            animation: animateWave 3s linear infinite;
        } 
        @keyframes animateWave
        {
            0%
            {
                background-position-x: 1000px ;
            }
            100%
            {
                background-position-x: 0px ;
            }
        }
        @keyframes animateWave_2
        {
            0%
            {
                background-position-x: 0px ;
            }
            100%
            {
                background-position-x: 1000px ;
            }
        }

    </style>
    
</head>
<body>

    
    <section id="footer">
        <div class="container">
            <div class="content">
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
</body>
</html>
