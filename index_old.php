<?php 
require_once('getdata.php');
$uploads_path_uri = "uploads/";
?>










<html>
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    
    
       

    
    html, body{
        margin: 0;
        padding: 0;
        height: 100%;
   
        

    }
    
    html{
        background-color: #000000;
    }
    
    body{
        background-color: #000000;
    }
    
    .hero{
        display: block;
        width: 100vw;
        height: 100vh;
        position: relative;
    }    
    
    .videocontainer{
        width: 100%;
        height: 100vh;
        overflow: hidden;
        position: absolute;
    }
    
    .videocontainer .bg{
        height: auto;
        width: auto;
        min-height: 100%;
        min-width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    
    .logo{
        height: 40vh;
        width: auto;
        max-width: 100vw;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        opacity: 0.7;
    }
    
    .content{
        position: absolute;
        top: 75%;
        left: 0;
        width: 100%;
        text-align: center;
    }
    
    .button, .button:active, .button:visited{
        min-width: 80px;
        display: inline-table;
        margin: auto;
        background-color: #ffffff;
        padding: 5px 10px;
        border-radius: 5px;
        color: #000000;
        text-decoration: none;
        font-size: 15px;
        text-align: center;
        text-transform: uppercase;
        font-family: "Inter", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        letter-spacing: 0.05em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        opacity: 0.8;
        mix-blend-mode: screen;
        margin: 0 10px 0 10px;
    }
    
    p{
       font-size: 15px;
        /*text-align: center;*/
        text-transform: uppercase;
        color: #ffffff;
        font-family: "Inter", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        letter-spacing: 0.05em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        margin: 2px auto;
        max-width: 80%; 
    }
    
    p.footer{
        text-align: center;
    }
    
    p a, p a:visited{
        color: #ffffff;
    }
    
    .socmed{
        position: absolute;
        top: 85%;
        top: calc(75% + 50px);
        left: 50%;
        height: 5vh;
        transform: translatex(-120%);
        opacity: 0.8;
    }
    
    .fb{
        transform: translatex(20%);
    }
    
    space{
        display: block;
        height: 50px;
    }
    
    .menus{
        display: table;
        margin: auto;
        padding: 50px 0;
        border: 1px solid #444;
        border-radius: 10px;
        margin: 50px auto;
        width: 80%;
        max-width: 500px;
    
    }
    
    .menus p{
        text-align: center;
    }
    
    .menus p a, menus p a:visited, menus p a:active{
         min-width: 80px;
        display: inline-table;
        margin: auto;
        background-color: #ffffff;
        padding: 5px 10px;
        border-radius: 5px;
        color: #000000;
        text-decoration: none;
        font-size: 15px;
        text-align: center;
        text-transform: uppercase;
        font-family: "Inter", serif;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        letter-spacing: 0.05em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        opacity: 0.8;
        mix-blend-mode: screen;
        margin: 0 10px 0 10px;
        text-align: center;
    }
    
</style>   

<title>BANK 28 Brewing Co.</title>   
    
    
<link rel="icon" type="image/png" href="favicon.png">
    
    
<meta property="og:title" content="BANK 28 Brewing Co." />
<meta property="og:description" content="Pub in Varberg. Kungsgatan 28." />
<meta property="og:image" content="https://bank28.se/bank28-og.jpg" />  
    
    
<meta name="description" content="Pub in Varberg. Kungsgatan 28."> 

    
</head>    
    
    
<body>
    
    
<div class="hero">

    <div class="videocontainer">
    <video class="bg" autoplay muted playsinline loop>
            <source src="bank28-bg-250208.mp4" type="video/mp4" poster="bank28-bg-250208-preview.jpg">
    </video>
    </div>
    
    <img class="logo" src="bank28-logo-white.svg" />
    
    <div class="content">
        <a class="button" href="#readmore">Booking</a>
        <a class="button" href="#menus">Menu</a>
        
        

        
        
        
        
    </div>    
        
        
    <a href="https://www.facebook.com/profile.php?id=61571629866911 "><img class="fb socmed" src="fb.png" /> </a>
        
       
        
    <a href="https://www.instagram.com/bank28varberg/"><img class="insta socmed" src="insta.png" /> </a>      
        
    
    
    
    
    
</div><!-- hero -->    


<div class="article" >
    <space></space>
    
    <p><?php echo getdata('innehallet'); ?></p>
    
    <div class="menus" id="menus">
    <p>Menu</p>
        <space></space>
    <p>
        
        
        
        
        <?php if(show_file_option('menueat')): ?>
<a href="<?php echo get_file('menueat')."?".rand(100, 999);?>">Eat</a>
<?php endif; ?>


<?php if(show_file_option('menudrink')): ?>
<a href="<?php echo get_file('menudrink')."?".rand(100, 999);?>">Drink</a>
<?php endif; ?>
        
        </p>
    </div>
    
    <p><?php echo getdata('kontaktyta'); ?></p>
    <space></space>
    
    <div id="readmore"></div>
    <iframe style="height:1100px; width:100%; max-width:750px; none; display: block; margin: 0 auto; overflow:auto; border:none;" src="https://3.bordsbokaren.se/?i=3081&k=fGsvHtZY"></iframe>
     <space></space>
    
    
    <p class="footer">BANK 28 Brewing Co. Pub in Varberg.
    </p>
    <p class="footer">info@bank28.se</p>
    <space></space>
</div>
    

</body>
</html>