<?php
    require_once('private/initialize.php');

    if(isset($_POST['submit'])){
        $name = $_POST['songName'];
        $artist = $_POST['songArtist'];
        $genre = $_POST['songGenre'];
        $album = $_POST['songAlbum'];
        $albumOrder = $_POST['songAlbumOrder'];
        $plays = $_POST['songAlbumPlays'];
        $Song = $_FILES['song']['name'];
        $duration = ($_FILES['song']['size'] /1024);
        $fileLocation =  "music/".$_FILES["song"]["name"];

        $query = "INSERT INTO songs (title,artist,album,genre,duration,path,albumOrder,plays) VALUES ('$name','$artist','$album','$genre','$duration','$Song','$albumOrder','$plays')";
        $query_run = mysqli_query($db,$query);

        if($query_run){
            move_uploaded_file($_FILES["song"]["tmp_name"], $fileLocation);
            $_SESSION['status'] = "Album successfully uploaded";
            header('Location: admin-song.php');
        }else{
            $_SESSION['status'] = "Album not successfully uploaded";
            header('Location: createAlbum.php');
        }
    }
    
    if(isset($_POST['updateMusic'])){
        $songId = $_POST['musicId'];
        $name = $_POST['songName'];
        $artist = $_POST['songArtist'];
        $genre = $_POST['songGenre'];
        $album = $_POST['songAlbum'];
        $albumOrder = $_POST['songAlbumOrder'];
        $plays = $_POST['songAlbumPlays'];

        $oldSong = $_POST['oldSong'];
        $newSong = $_FILES['song']['name'];
        $duration = ($_FILES['song']['size'] /1024);
        $fileLocation =  "music/".$_FILES["song"]["name"];
       
        if($newSong != '')
        {
            $updateFileName = $_FILES['song']['name'];
        }
        else
        {
            $updateFileName = $oldSong;
        }
        
        if(file_exists("music/" . $_FILES['song']['name']))
        {
            $filename = $_FILES['song']['name'];
            $_SESSION['status'] = " Song already exits ".$filename;
            header("Location: editMusic.php");
        }
        else
        {
            // updating
            $query = "UPDATE songs SET title='$name', artist='$artist',genre='$genre',duration='$duration',path='$updateFileName',albumOrder='$albumOrder',plays='$plays' WHERE id='$songId'";
            $query_run = mysqli_query($db,$query);

            if($query_run)
            {
                if($_FILES['song']['name'] != '')
                {
                    move_uploaded_file($_FILES["song"]["tmp_name"], "music/".$_FILES["song"]["name"]);
                    unlink("music/".$oldSong);
                }
                $_SESSION['status'] = "Updated Successfully!";
                header("Location: admin-song.php");
            }
            else
            {
                $_SESSION['status'] = "Update Not Successfull!";
                header("Location: admin-song.php");
            }
        }
    }

    
    if(isset($_POST['deleteSong']))
    {
        $id = $_POST['deleteId'];
        $songDelete = $_POST['deleteSong'];

        $query = "DELETE FROM songs WHERE id='$id'";
        $query_run = mysqli_query($db,$query);

        if($query_run)
        {
            unlink("music/".$songDelete);
            $_SESSION['status'] = "Update Deleted Successfully!";
            header("Location: admin-song.php");
        }
        else
        {
            $_SESSION['status'] = "Update Not Successfull!";
            header("Location: admin-song.php");
        }

    }

?>