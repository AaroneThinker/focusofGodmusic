<?php
    require_once('private/initialize.php');

    if(isset($_POST['submit'])){
        $name = $_POST['artist'];

        $query = "INSERT INTO artists (name) VALUES ('$name')";
        $query_run = mysqli_query($db,$query);

        if($query_run){
            $_SESSION['status'] = "Artist successfully uploaded";
            header('Location: admin-singer.php');
        }else{
            $_SESSION['status'] = "Artist not successfully uploaded";
            header('Location: admin-add-singer.php');
        }
    }
    
    if(isset($_POST['updateArtist'])){
        $artistId = $_POST['artistId'];
        $name = $_POST['artist'];

        // updating data
        $query = "UPDATE artists SET name='$name' WHERE id='$artistId'";
        $query_run = mysqli_query($db, $query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            header("Location: admin-singer.php");
        }else{
            $_SESSION['status'] = "Not updated Successfully";
            header("Location: admin-singer.php");
        }
    }
    
    if(isset($_POST['deleteArtist']))
    {
        $id = $_POST['deleteId'];

        $query = "DELETE FROM artists WHERE id='$id'";
        $query_run = mysqli_query($db,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Update Deleted Successfully!";
            header("Location: admin-singer.php");
        }
        else
        {
            $_SESSION['status'] = "Update Not Successfull!";
            header("Location: admin-singer.php");
        }

    }

?>