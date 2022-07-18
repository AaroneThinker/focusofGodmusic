<?php
    require_once('private/initialize.php');

    if(isset($_POST['submit'])){
        $name = $_POST['genre'];

        $query = "INSERT INTO genres (name) VALUES ('$name')";
        $query_run = mysqli_query($db,$query);

        if($query_run){
            $_SESSION['status'] = "Genre successfully uploaded";
            header('Location: admin-category.php');
        }else{
            $_SESSION['status'] = "Genre not successfully uploaded";
            header('Location: admin-add-category.php');
        }
    } 

    if(isset($_POST['updateGenre'])){
        $genreId = $_POST['genreId'];
        $name = $_POST['genre'];

        // updating data
        $query = "UPDATE genres SET name='$name' WHERE id='$genreId'";
        $query_run = mysqli_query($db, $query);

        if($query_run){
            $_SESSION['status'] = "Updated Successfully";
            header("Location: admin-category.php");
        }else{
            $_SESSION['status'] = "Not updated Successfully";
            header("Location: admin-category.php");
        }
    }
    
    if(isset($_POST['deleteGenre']))
    {
        $id = $_POST['deleteId'];

        $query = "DELETE FROM genres WHERE id='$id'";
        $query_run = mysqli_query($db,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Genre Deleted Successfully!";
            header("Location: admin-category.php");
        }
        else
        {
            $_SESSION['status'] = "Update Not Successfull!";
            header("Location: admin-category.php");
        }

    }

?>