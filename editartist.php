<?php
include "header.php";
?>
<?php
    include("config.php");
    $id = $_GET['getid'];

   if(isset($_POST['submit'])){
    // $id = $_POST["id"];
    $artist_name = $_POST["artist_name"];
    $artist_image = $_POST["artist_image"];
    $genre_id = $_POST["genre_id"];

    
    $query4 = "UPDATE `artist` SET `artist_name`='$artist_name',
    `artist_image`='$artist_image',`genre_id`='$genre_id' WHERE `Artist_id` = '$id'";

    $result4 = mysqli_query($conn, $query4);

    if($result4){
       echo"update";
    }
    else{
        echo "Error";
    }
}
?>



<div class="content-body">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <form action="" method="Post">
                    <h1>Edit Artist</h1>
                    <?php
                    $query = "SELECT * FROM `artist` WHERE Artist_id = $id";
                    $result = mysqli_query($conn, $query);
                    $data = mysqli_fetch_assoc($result);
                    ?>
        <input value="<?php echo $data["Artist_id"]?>" type="hidden" name="id">

                    <input value="<?php echo $data['artist_name']?>" type="text" name="artist_name"><br><br>
                    <input value="<?php echo $data['artist_image']?>" type="file" name="artist_image"><br><br>

                    
                    <select name="genre_id" id="" class="form-control mt-2">
            <?php
              $qry= "select * from genre";
              $res= mysqli_query($conn, $qry);
              
              while($data = mysqli_fetch_assoc($res)){
                  if($data['id'] == $rows['genre_id'] ){
                    $selected = 'selected';
                  }
                  else{
                    $selected = '';
                  }
                  ?>

                <option <?php echo $selected ?> value="<?php echo $data["id"]?>"><?php echo $data["genre_name"]?></option>
            <?php
                }
            ?>
        </select>
                   

                    <button class="btn btn-outline-primary mt-3" name="submit">Edit</button>
                    <a class="btn btn-primary mt-3 mx-2" href="artistlist.php">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>