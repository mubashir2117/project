
<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post">
                    <h1>Add Genre</h1>
                    <input type="text" class="p-1 border border-dark rounded" name="genre_name" required><br><br>
                    <button class="btn btn-outline-primary btn-sm" name="submit">Add Genre</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
</body>
</html>

<?php
    include("config.php");
   if(isset($_POST['submit'])){
   
    $genre_name = $_POST["genre_name"];
    
    $query = "INSERT INTO `genre`(`genre_name`) VALUES ('$genre_name')";

    $result = mysqli_query($conn, $query);

    if($result){
        echo "Record inserted";
       
    }
    else{
        echo "Error";
    }
}
?>