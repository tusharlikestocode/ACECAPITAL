<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Acme&family=Ubuntu:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <style>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" width="width-display initial-scale=1.0">
    <title>ACECAPITAL</title>
    <link rel=”stylesheet” type=”text/css” href=”csvtable.css” title=”style” />
     <script type=”text/javascript” src=”js/jquery-1.4.2.min.js”></script> 
     <script type=”text/javascript” src=”js/jquery.csvToTable.js”></script> 
     <script type=”text/javascript” src=”js/jquery.tablesorter.dev.js”></script>
    <script src="https://kit.fontawesome.com/0a9cab79ad.js" crossorigin="anonymous"></script>
</head>
<body class="bdy">
<div class="first">
    <div class="logonamesearch">
      <div class="logoname">
      <img src="Images/newlogo.png" id="logo">
      <div class=""><h1 id="name">ACECAPITAL</h1></div>
      </div>
        <!-- <div class="searchbar">
        <input type="submit" value="Sign In/Register" class="but" onclick="document.location='register.php'">
        </div> -->
     </div>
   
    <div class="tcontainer">
    
        <div class="upper">
        <div class="tile1" onclick="document.location='final.php'">
            <p class="s">STOCKS</p>
            <img src="Images\money-graph-with-up-arrow.png" id="stlogo">
        </a>
        </div>
        <div class="tile2" onclick="document.location='template.php'">
            <p class="m">US STOCKS</p>
            <img src="Images/dollar-sign-16975.png" id="mflogo">
        </div>
        </div>
</div>
<div class="start">
    <p>START YOUR INVESTING JOURNEY TODAY<p>
     </div>
</div>
<div class="second">
    <div id="tag">
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
        <script src="rotation.js"></script>
        <script>
        
        $(document).ready(function(){
            var entries=[
                {label:'TATA'},
                {label:'RELIANCE'},
                {label:'HDFC'},
                {label:'INFOSYS'},
                {label:'ICICI'},
                {label:'HUL'},
                {label:'SBI'},
                {label:'BAJAJ'},
                {label:'AIRTEL'},
                {label:'ADANI'},
            ];
            var settings={
                entries:entries,
                width:640,
                height:480,
                radius:'65%',
                radiusMin:75,
                bgDraw:true,
                opacitySpeed:6,
                fov:800,
                speed:2,
                fontFamily:'Courier,Arial,sans-serif',
                fontSize:'30',
                fontColor:'#f00',
                fontWeight:'bold',
                fontStyle:'normal',
                fontSretch:'normal',
                fontToUppercase:true,
            };
            $('#tag').svg3DTagCloud(settings);
        });
        </script>
    </div>
    <div id="txt1">
        <p style="color:antiquewhite">INVEST IN</p>
    </div>
    <div id="txt2">
        <p style="color:aqua">BEST COMPANIES OF INDIA & US</p>
    </div>
</div>
    <div class="third">
        <div class="rev">
            <p style="font-family: 'Ubuntu', sans-serif;font-size:7vh;">Hear Out Our Users</p>
        </div>

        <div class="slide-container">
            <div class="card1">
                <div class="top"><img src="Images/people/vivek.jpeg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Vivek Tiwari
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                    Loved the Simplistic UI of the website it made my investing journey much easier
                </p>
                <img src="Images/rating.png" class="star">
            </div>
            <div class="card2">
                <div class="top"><img src="Images/people/suraj.jpg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Suraj Prajapati
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                    This website is very beginner friendly I recommend it to everyone who does invest
                </p>
                <img src="Images/rating.png" class="star">
            </div>
            <div class="card3">
                <div class="top"><img src="Images/people/jagjeet.jpg" class="dp">
                </div>
                <div class="nameh">
                <p class="names">Jagjeet Sappal
                </p>
                <div class="rcorner1">
                </div>
                <div class="rcorner2">
                </div>
            </div>
                <p class="para">
                  This website helped me a lot in making my first ever Investment portfolio
                </p>
                <img src="Images/rating.png" class="star">
            </div>
        </div>
    </div>
    <div class="about">
 <h1 style="text-align:center;"><b>ABOUT US</b></h1>
 <ul>
 <li><a href="T&C.html" target="_self">TERMS AND CONDITION</a></li>
 <li><a href="pp.html"target="_self">PRIVACY POLICY</a></li>
 <li><a href="FAQ.html"target="_self">F.A.Q.s</a></li>
 <li>CONTACT US</li>
 </ul>
 <div class="contact">
 <a href="#" style="padding:0px 8px ;"><i class="fab fa-facebook-f"></i></a>
 <a href="#"style="padding:0px 8px;"><i class="fa-regular fa-envelope"></i></a>
 <a href="#"style="padding:0px 8px;"><i class="fa-brands fa-square-twitter"></i></a>
 </div>
 </div>
 
</body>
</html>
