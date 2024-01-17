<?php
    include("config.php");
    $query = "SELECT * FROM roles";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!--favicon-img--> 
     <link rel="icon" type="image/png" href="images/favicon.jpg">
      
</head>
<style>
    body {
      font-family: 'Arial', sans-serif;
      background: url(./images/imgheader.jpg); /* login BACKGROUND IMAGE*/
      background-repeat: no-repeat;
      background-position: center;

      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      text-align: center;
      background: rgba(77, 57, 57, 0.295);
      box-shadow: 0 0 50px rgba(0, 0, 0, 0.9);
      backdrop-filter:  blur(10px) !important;
    }

    .login-container h2 {
      color: #2196F3;
    }

    .login-form {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .login-form label {
      color: #000;
      font-weight: bold;
      text-align: left;
      
    }

    .login-form input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      margin-top: 5px;
      margin-bottom: px;
      border: 1px solid #2196F3;
      border-radius: 5px;
      background: #fff;
      color: #333;
      outline: none;
    }

    .login-form button {
      background: #1565C0;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      transition: background 0.3s ease;
    }

    .login-form button:hover {
      background: transparent;
    }

    .login-form button:active {
      background: #0D47A1;
    }

    
  </style>
<body>
  
<div class="content-body">
    <div class="container-fluid">

        <div class="row">
<div class="login-container">
  
  <form action="" class="login-form" id="loginForm"  method="Post">
  <h1>Sign up!</h1>
 
  <input type="text" class="p-1 border border-dark rounded" name="user_name" id="email" autocomplete="off" placeholder="Enter Username" required>

 <input type="email" class="p-1 border border-dark rounded" name="user_email" id="email" autocomplete="off" placeholder="Enter Email" required>
 <input type="password" class="p-1 border border-dark rounded" name="user_password" id="email" autocomplete="off" placeholder="Enter Password" required>
   <input type="password" class="p-1 border border-dark rounded" name="confirm_password" id="email" autocomplete="off" placeholder="Enter Confirm Password" required>
   
   <input type="hidden" class="p-1 border border-dark rounded" name="role_id" value="2" required><br>              
   <button class="btn btn-outline-primary btn-lg" name="submit">Submit</button>
              <p class="mt-5 text-center text-white" style="color:white; text-decoration:none;">Already have an account? 
             <a href="login.php" class="text-primary" style="color:yellow; font-size:18px; text-decoration:none;">Login</a></p>
            </form>
          
            
          </div>
        </div>
    </div>
</div>

</body>
</html>


<?php
    if(isset($_POST["submit"])){
      $name = $_POST['user_name'];
      $email = $_POST['user_email'];
      $password = $_POST['user_password'];
      $confirm_password = $_POST['confirm_password'];

      $role_id = $_POST['role_id'];

       
      $query = "Insert into users (user_name,user_email,user_password,confirm_password,role_id) VALUES 
      ('$name','$email','$password','$confirm_password','$role_id')";

      $result = mysqli_query($conn, $query);
      echo "<script>location.href = 'login.php';</script>";
    }
?>