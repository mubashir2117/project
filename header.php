<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<style>
    /* Basic styling for the dropdown */
    .dropdown {
      width: 200px;
      position: relative;
      display: inline-block;
    }

    /* Style for the dropdown button */
    .dropdown-btn {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      
      border-radius: 4px;
      background-color: #fff;
      cursor: pointer;
    }

    /* Style for the dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      width: 100%;
      margin-top: 5px;
    }

    /* Style for dropdown options */
    .dropdown-content a {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: #333;
      background-color: #fff;
      border-bottom: 1px solid #ddd;
    }

    /* Highlight the selected option */
    .dropdown-content a:hover {
      background-color: #f5f5f5;
    }

    /* Show the dropdown content when the dropdown button is hovered */
    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>


<body>



    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <!-- <img class="logo-compact" src="./images/img.png" alt=""> -->
                <!-- <img class="brand-title" src="./images/img-removebg-preview.png" alt=""> -->
                <!-- <img class="logo-abbr" src="./images/adminimg-removebg-preview.png"  width="1260px" height="50px" alt=""> -->
                <h5 class="text-white text-content mt-3 mx-5 ">ADMIN</h5>
            </a>

            <div class="nav-control"> 
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                        <div class="dropdown mt-4">
  <div class="dropdown-btn mx-5"> <i class="mdi mdi-account"></i></div>
  <div class="dropdown-content">
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>
   </div>
</div>

                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li class="nav-label first text-white">Menu</li>
                    <li><a class="has-arrow" href="index.php" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text text-white">Dashboard</span>
                            </a>
</li> -->
                    
                    <li class="nav-label text-white">Genre</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Genre</span></a>
                        <ul aria-expanded="false">
                            <li><a href="genre.php">Add Genre</a></li>
                           
                            <li><a href="genrelist.php">Genre List</a></li>

                        </ul>
                    </li>
                    <li class="nav-label text-white">Artist</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text text-white">Artist</span></a>
                        <ul aria-expanded="false">
                            <li><a href="artist.php">Add Artist</a></li>                           
                            <li><a href="artistlist.php">Artist List</a></li>
                           </ul>
                    </li>
                    <li class="nav-label text-white"> Song</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text text-white">Song</span></a>

                        <ul aria-expanded="false">
                            <li><a href="song.php">Add Song</a></li>                           
                            <li><a href="songlist.php">Song List</a></li>
                            
                        </ul>
                    </li>
                    
                    <li class="nav-label text-white"> Video</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Video</span></a>
                        <ul aria-expanded="false">
                            <li><a href="video.php">Add Video</a></li>
                           
                            <li><a href="videolist.php">Video List</a></li>
                          
                        </ul>
                    </li>  

                   
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text text-white">Reviews</span></a>

                        <ul aria-expanded="false">
                            <li><a href="index.php">Reviews</a></li>
                        
                        </ul>
                    </li>
                </ul>
                
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->