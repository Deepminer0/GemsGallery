<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;600&family=Quicksand:wght@300&display=swap" rel="stylesheet">
<script src="main.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;600&display=swap" rel="stylesheet">
    
<body>
        
    <div class="navbar">
    <a href="http://localhost/new/index.php" class="navabarlinks">connect</a>
    <a href="http://localhost/database/index.php" class="navabarlinks">offline</a>
    <a href="http://localhost/onlinedatabse/index.php" class="navabarlinks">online</a>
    <a href="#" class="navabarlinks">service</a>
    <a href="#" class="navabarlinks">catalogue</a>
</div>


        <!-- ------------Header---------------- -->

        
<div class="PosterBanner">
    <img src="Image/models.png" alt="model" class="model">
   <img src="Image/logo.png" class="logo">
    <div class="text">
    <h1 class= shopname> </h1>GemsGallery
    <p>Streamline databases, empower business maintenance.<br>Here are the quick actiom to do</p>
    <a href="#" class="Database">Database</a>&nbsp;
    <a href="#" class="Database">Products</a><br>

<!-- ----------videobuttons--------------------------- -->
<a href="#" class="watchvideo">watch video</a>
    <div id="light">
  <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
  <video id="VisaChipCardVideo" width="600" controls>
      <source src="video/vitton.mp4" type="video/mp4">
    </video>
</div>
<div id="fade" onClick="lightbox_close();"></div>
<div>
  <a href="#"  onclick="lightbox_open();"> <img src="Image/videoclipart.png"
             alt="Click to visit geeksforgeeks.org" class="videoclipart"> </a>
</div>
</div>
</div>

<!-- CustomerFORM------------------------------ -->
    <!-- <div class ="banner">
        <div class="customerdetail">

            <h2>Enter Customer details</h2>
        </div>
    <form method="POST" action="process.php">
        
    
        <input type="text" name="name"id="textbox" required placeholder="Customer Name "><br>
        <input type="text" name="adhar"id="textbox" required placeholder="Aadhar Number"><br>
        <input type="number" name="mobile" id="textbox" required placeholder="Phone Number"><br>
        <input type="number" name="dues" id="textbox" required placeholder="Dues Amount"><br>
        <input type="submit" class="registerbtn" value="Register">
    </form>
    
</div> -->

<!-- --------------------secondbanner--------------- -->
<div class="greybanner">
    <img src="Image/pandora.png" alt="pandora" class="pandora">
    <img src="Image/forbes.png" alt="forbes" class="forbes">
    <img src="Image/buccelati.png" alt="buccelati" class="buccelati">
    <img src="Image/channel.png" alt="channel" class="channel">
    <img src="Image/tanishq.png" alt="tanishq" class="tanishq">
    <img src="Image/brillianto.png" alt="brillianto" class="brillianto">
    <img src="Image/lv.png" alt="lv" class="lv">
    
</div>


<div class="patnership">
<h1 class = "title">The epitome of luxury love</h1>
<h5 class="luxury-paragrapgh">luxury products</h5>
</div>
<!-- ------------------------------products------------------------- -->


<div class="products">
    <img src="Image/earring1.png" class="earring"   alt="earring1">
   
    <img src="Image/earring1.png" class="earring"   alt="earring1">
    <img src="Image/earring1.png" class="earring"   alt="earring1">
    <img src="Image/earring1.png" class="earring"   alt="earring1">
    <img src="Image/earring1.png" class="earring"   alt="earring1"><br>
    
</div>

<div class="post">
    <h1 class="bannertext">noreen</h1>
    <h1 class=bannerpragraph>the luxury<br>expression of you</h1>
    <H1 class="QOUTE">live the life you want.be unmistakably you!</H1>
    <img src="Image/necklace1.png"class="ring" alt="">
    <img src="Image/motineclace.png" class="necklace"alt="necklace">
    <div class=shadowbox1></div>
    <div class=shadowbox2></div>
    <div class=shadowbox3></div>
    <div class=shadowbox4></div>
</div>

<!-- ----------------------------content-------------- -->
<div class="content">

</div>


<!-- _____FORMTAB1_________ -->
<div class="formarea">

<div class="sectionbar">
    
    <button class="dynamic_button" onclick="openCity('submit')"> form</button>
    <button class="dynamic_button" onclick="openCity('FAQ')">FAQ</button>
    <button class="dynamic_button" onclick="openCity('more')">more</button>
</div>



 <div id="submit" class="w3-container city" style="display:none"> <!------FORM----->
    <div class="submit_form">

<img src="Image/clipart_home1.png" alt="" class="home_clipart">
<h1 class="home_address" class="form_text">Near Utrethia Dental Hospital<br>Beside Royal 824231</h1>
<img src="Image/phone2.png" class="call" alt="call">
<h1 class="number">+91 7765917022</h1>
<img src="Image/mail1.png" class="mail"alt="mail">
<a href=mailto:deep.kumar7765@gmail.com? subject=subject text="HTML link" class="email_id">deep.kumar7765@gmail.com</a>






<!-- ____FORMTAB1____ -->
<div class="container">
<form action="https://formspree.io/f/xdorojej" method="POST" class="">
<input type="text" name="Name" placeholder="Full Name" required>
<br>
<input type="email" name="Email" placeholder="Email" required>
<br>
<input type="text" name="text" placeholder="Subject" required>
<br>

<button type="submit"class="button" >Send</button>
</form>
<h1 class="touch"> Get In Touch With Us </h1>  
<h1 class="touch_paragrapgh">Get in touch for personalized assistance and exceptional service. <br>Contact us to achieve your goals with expert guidance.</h1>
</div>
</div>
</div>

<!-- ___FAQTAB_____ -->
<div id="FAQ" class="w3-container city" style="display:none">
<div class="FAQ">
<main>
      <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">What is an FAQ Page?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faq_paragrapgh">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Why do you need an FAQ page?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faq_paragrapgh">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
<h1 class="faq-page">Does it improves the user experience of a website?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faq_paragrapgh">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
<h1 class="faq-page">Does it improves the user experience of a website?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p class="faq_paragrapgh">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
        </section>
    </main>
</div>
</div>

<!-- ____SERVICE___ -->
<div id="more" class="w3-container city" style="display:none">
<div class="more">

<div class="servicebox">
<video width="390px" controls class="video"  poster="Image/lvorange.png" >
<source src="Video/luis.mp4" type="video/mp4">
</video>
</div>

<div class="servicebox">
<video width="390px" controls class="video" poster="Image/lvorange.png" >
<source src="Video/luis.mp4" type="video/mp4">
</video>
</div>

<div class="servicebox">
<video width="390px" controls class="video" poster="Image/lvorange.png" >
<source src="Video/luis.mp4" type="video/mp4">
</video>
</div>


</div>
</div>




<!-- ____SCRIPT______ -->
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
// ____SCRIPT___
</script>
</div>




<!-- ----------------------------- -->

<div class= "footer">
    <img src="Image/logo.png" class="footer_logo" alt="">
    <a href="#" class="footer_link1">Brand </a>
    <a href="#" class="footer_link1">Media </a>
    <a href="#" class="footer_link1">Products</a>
    <br><br><br><br>
    <a href="#" class="footer_link1">Brand diretory </a>
    <a href="#" class="footer_link1">pricing </a>
    <a href="#" class="footer_link1">contact</a>
    <a href="#" class="footer_link1">blog</a>
    <a href="#" class="footer_link1">gallery</a>
    <br><br>

    <a href="#" ><img src="Image/facebook.png"  class="socialmedia"  alt=""></a>
    <a href="#" ><img src="Image/instagram.png"  class="socialmedia"  alt=""></a>
    <a href="#" ><img src="Image/twitter.png"  class="socialmedia"  alt=""></a>
    <a href="#" ><img src="Image/whatsapp.png"  class="socialmedia"  alt=""></a>
    <a href="#" ><img src="Image/email.png"  class="socialmedia"  alt=""></a>
  
</div>

</body>
<script src="main.js"></script>
</html>