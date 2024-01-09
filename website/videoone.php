<?php
session_start();
if($_SESSION['role']== 2){
include "config.php";

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
       <!--favicon-img--> 
       <link rel="icon" type="image/png" href="images/favicon.jpg">
       <!--favicon-img-->
    
        <link rel="stylesheet" href="css/index.css">
       
    
    </head>
<body>
    <main id="songs-one">


<!--         
        <div class="cursor scale"></div>
        <div class="cursor-two scale"></div> -->


        <div id="preloader">
            <div class="p">
                <img src="images/headphone.png" alt="headphone">
            </div>
            <div class="p">Use Headphone For Better Music Experience.</div>
        </div>

<!-- CONTENT -->
        <div id="songs-one-content">



   <!-- NAVIGATION -->
   <div class="navigation">
    <div class="logo hover ">
    <img src="images/logo.png" style=" background-color: rgba(145, 140, 140, 0.822); box-shadow: 0 0 5px rgba(0, 0, 0, 0.9);
         backdrop-filter:  blur(10px);  border-radius: 10px; clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);"  width="200" height="140" title="headphone zone" class="texts" alt="headphone">
      
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
     Videos
    </div>
</div>

<!-- HEADING -->




<!-- SONGS CONTAINER -->


<div class="center container">
<div id="songs-container" class="row">

    <!-- SONG -->
    <?php
                $qry= "SELECT * FROM `video`  join genre on genre.id = video.genre_id join artist on artist.Artist_id = video.Artists_id";
                $res= mysqli_query($conn, $qry);
                
                while($data = mysqli_fetch_assoc($res)){
                    ?>

                    <div class="song fade-up col-lg-3 col-md-6 col-sm-12">  
    <div class="song-img">
    <video src="<?php echo $data['video_file'] ?>" width="250" height="200" type="video/mp4" controls>
</video>
    </div>

    <div class="song-details">
        <div class="song-details-content">
        <div class="song-name">  <?php echo $data["video_name"];?>  </div>
        <div class="song-name"><?php echo $data["artist_name"];?></div>
        <div class="song-name"><?php echo $data["genre_name"];?> </div>

        </div>
        
        <div class="music-player">
         
            <div class="download-song mouse">
    <a href="../<?php echo $data["video_file"]; ?>" download="<?php echo $data["video_name"]; ?>">
        <img src="images/download.png" alt="download">
    </a>
</div>

        </div>
    </div>
                </div>
    <?php } ?>
</div> 
</div>
    <!-- SONG -->



<!-- SONGS CONTAINER -->



 <!-- HEADPHONE IMG -->
 <div class="headphone img text">
    <img src="images/headphone.png" title="headphone zone" class="text" alt="headphone">
  </div>
   <!-- HEADPHONE IMG -->
  
               
   
 <!-- MUSIC INDICATOR -->
 <div class="music-indicator">
    <span style="--i:1;" class="music-indicator-span"></span>
    <span style="--i:2;" class="music-indicator-span "></span>
    <span style="--i:3;" class="music-indicator-span "></span>
    <span style="--i:4;" class="music-indicator-span "></span>
  </div>
   <!-- MUSIC INDICATOR -->
  
               


<!-- progress-bar -->
<div class="progress-bar-container fade-in">
    <div class="progressbar"></div>
</div>
<!-- progress-bar -->

        </div>
<!-- CONTENT -->
     
    <!-- NAVIGATION CONTENT -->
    <div class="navigation-content">
        
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
        
    </div>
    
    <!-- NAVIGATION CONTENT -->
      
   </main>


    <script src="js/jquery.min.js"></script>
    <script src="js/bez.js"></script>
    <script src="js/pace.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
<?php }
else {
    echo "
    <script>
        alert('Login First');
        window.location.href='login.php';
    </script>
    ";
}
?>