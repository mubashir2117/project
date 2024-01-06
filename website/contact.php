<?php
include("config.php");
?>

<?php
   if(isset($_POST['submit'])){
   
    $c_name = $_POST["c_name"];
    $c_email = $_POST["c_email"];
    $c_subject = $_POST["c_subject"];
    $message = $_POST["message"];
    
    $query = "INSERT INTO `contact`(`c_name`,`c_email`,`c_subject`,`message`) VALUES 
    ('$c_name','$c_email','$c_subject','$message')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Record inserted";
    }
    else{
        echo "Error";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
       <!--favicon-img--> 
       <link rel="icon" type="image/png" href="images/favicon.jpg">
       <!--favicon-img-->
    
        <link rel="stylesheet" href="css/index.css">
       
    
    </head>
<body>
    <main id="contact-one">

         <!-- CUSTOM CURSOR -->
         <!-- <div class="cursor scale"></div>
         <div class="cursor-two scale"></div> -->
         <!-- CUSTOM CURSOR -->

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="p">
                <img src="images/headphone.png" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Experience.</div>
        </div>
        <!-- PRELOADER -->


        <div id="contact-one-content">

  <!-- NAVIGATION -->
  <div class="navigation">
    <div class="logo hover ">
       <a href="index-two.html" class="text">Sound</a>
    </div>
    <div class="menu-bar hover ">
        <div class="menu-bar-name text">
            Menu
        </div>
        <div class="menu-bar-lines text">
            <div class="menu-bar-line"></div>
            <div class="menu-bar-line"></div>
        </div>
    </div>
</div>
<!-- NAVIGATION -->





<!-- HEADING -->
<div class="heading">
    <div class="text">
      CONTACT
    </div>
</div>

<!-- HEADING -->


<div id="flex-row">

<!-- CONTACT FORM -->

<div id="contact-form">


    <div id="form" class="opacity-contact">

            <form action="" method="POST">
              <div class="input-line">
                <input id="name" name="c_name" type="text" placeholder="NAME" class="input-same-line" required>
                <input id="email" type="email" name="c_email" placeholder="EMAIL" class="input-same-line" required>
              </div>
              <div class="input-line-column">
                <input id="subject" name="c_subject" type="text" placeholder="SUBJECT" required>
                <textarea name="textarea" id="body" name="message" class="textarea" placeholder="MESSAGE" required></textarea>
              </div>
             <button type="button" id="submit" name="submit" class="hover">Send</button>
            </form>
          
    </div>
</div>

<!-- CONTACT FORM -->



<!-- ENQUIRY MAIL -->

<div id="collaboration-mail" class="opacity-contact">

    <div class="circular-text">
        <span id="rotated">  
            FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; 
            FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; 
            FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp; 
            FOR COLLABORATION * &nbsp;&nbsp;&nbsp;&nbsp;
         </span>
    </div>
    <div class="mail">
        <a href="">Sound</a>
    </div>
</div>

<!-- ENQUIRY MAIL -->

</div>







 <!-- HEADPHONE IMG -->
 <div class="headphone img text">
    <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
  </div>
   <!-- HEADPHONE IMG -->
  


<!-- progress-bar -->
<div class="progress-bar-container fade-in">
    <div class="progressbar"></div>
</div>
<!-- progress-bar -->



        </div>


        
    <!-- NAVIGATION CONTENT -->
   <div class="navigation-content">
        <div class="navigation-logo hover opacity">
            <a href="#" class="text">Sound</a>
         </div>
        <ul class="navigation-ul">
            <li><a href="index.php" data-text="Home" data-img="images/album-thumbnail-five.jpg">Home</a></li>
            <li><a href="about.php"  data-text="About"  data-img="images/about-img.jpg">About</a></li>
            <li><a href="songsone.php" data-text="Songs"  data-img="images/album-thumbnail-nine.jpg">Songs</a></li>
            <li><a href="videoone.php"  data-text="Video" data-img="images/img.jpg">Video</a></li>
            <li><a href="contact.php"  data-text="Contact" data-img="images/album-thumbnail-four.jpg">Contact</a></li>
        </ul>
        <div class="navigation-close hover about-close opacity">
            <div class="navigation-close-line"></div>
            <div class="navigation-close-line"></div>
          </div>
    
            <div class="project-preview"></div>

            
     <!-- HEADPHONE IMG -->
     <div class="headphone-navigation opacity">
        <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
      </div>
       <!-- HEADPHONE IMG -->
    
    
        <!-- SOCIAL MEDIA LINKS -->
        <div class="social-media-links-navigation">
            <ul>
                <li ><a href="#"  class="text hover opacity">YT</a></li>
                <li ><a href="#"  class="text hover opacity">FB</a></li>
                <li ><a href="#"  class="text hover opacity">IG</a></li>
            </ul>
        </div>
          <!-- SOCIAL MEDIA LINKS -->
    
    </div>
    
    <!-- NAVIGATION CONTENT -->




        </main>

        <script src="js/jquery.min.js"></script>
        <script src="js/circletype.min.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/bez.js"></script>
        <script src="js/pace.js"></script>
        <script src="js/index.js"></script>

</body>
</html>