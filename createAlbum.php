<?php
    require_once('private/initialize.php');

    if(isset($_POST['submit'])){
        $name = $_POST['album'];
        $artist = $_POST['artist'];
        $genre = $_POST['genre'];
        $image = $_FILES['albumImage']['name'];
       

        if(file_exists("upload/" . $_FILES['albumImage']['name']))
        {
            $filename = $_FILES['albumImage']['name'];
            $_SESSION['status'] = " Image already exits ".$filename;
            header("Location: admin-add-writer.php");
        }
        else
        {
            // $fileLocation =  "upload/".$_FILES["albumImage"]["name"];
            $query = "INSERT INTO albums (title,artists,genre,artworkPath) VALUES ('$name','$artist','$genre','$image')";
            $query_run = mysqli_query($db,$query);
    
            if($query_run)
            {
                move_uploaded_file($_FILES["albumImage"]["tmp_name"], "upload/".$_FILES["albumImage"]["name"]);
                $_SESSION['status'] = " Album successfully uploaded";
                header('Location: admin-writer.php');
            }
            else
            {
                $_SESSION['status'] = "Album not successfully uploaded";
                header('Location: createAlbum.php');
            }

        }
    }

    if(isset($_POST['updateAlbum'])){
        $albumId =$_POST['albumId'];
        $name = $_POST['album'];
        $artist = $_POST['artist'];
        $genre = $_POST['genre'];

        $oldImage = $_POST['albumImageOld'];
        $newImage = $_FILES['albumImage']['name'];
       
        if($newImage != '')
        {
            $updateFileName = $_FILES['albumImage']['name'];
        }
        else
        {
            $updateFileName = $oldImage;
        }
        
        if(file_exists("upload/" . $_FILES['albumImage']['name']))
        {
            $filename = $_FILES['albumImage']['name'];
            $_SESSION['status'] = " Image already exits ".$filename;
            header("Location: editAlbum.php");
        }
        else
        {
            // updating
            $query = "UPDATE albums SET title='$name', artists='$artist',genre='$genre',artworkPath='$updateFileName' WHERE id='$albumId'";
            $query_run = mysqli_query($db,$query);

            if($query_run)
            {
                if($_FILES['albumImage']['name'] != '')
                {
                    move_uploaded_file($_FILES["albumImage"]["tmp_name"], "upload/".$_FILES["albumImage"]["name"]);
                    unlink("upload/".$oldImage);
                }
                $_SESSION['status'] = "Updated Successfully!";
                header("Location: admin-writer.php");
            }
            else
            {
                $_SESSION['status'] = "Update Not Successfull!";
                header("Location: editAlbum.php");
            }
        }
    }

    if(isset($_POST['deleteAlbum']))
    {
        $id = $_POST['deleteId'];
        $imageDelete = $_POST['deleteImage'];

        $query = "DELETE FROM albums WHERE id='$id'";
        $query_run = mysqli_query($db,$query);

        if($query_run)
        {
            unlink("upload/".$imageDelete);
            $_SESSION['status'] = "Update Deleted Successfully!";
            header("Location: admin-writer.php");
        }
        else
        {
            $_SESSION['status'] = "Update Not Successfull!";
            header("Location: admin-writer.php");
        }

    }
    
?>