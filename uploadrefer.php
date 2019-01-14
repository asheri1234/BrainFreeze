<?php 


//when upload button is pressed
if(isset($_POST['upload'])){
//the path of storage for the uploaded images
    $target = "uploads/" .basename($_FILES['image']['name']);
    //connecting to the database

    $db = mysqli_connect('localhost', 'root', '','photos');

    //get all data submitted from the form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) 
    VALUES ('$image', '$text')"; 
    mysqli_query($db, $sql);
    //stores submitted data
    
    //move image into target folder
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "Image was uploaded successfully";
    } else{
        $msg = "there was a problem uploading image";
    }
    header('location: project.php');
}


?>





