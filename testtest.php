 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Upload</title>
  <link rel="stylesheet" href ="./registration/index.css">
  </head>
  <body>

    <header>

        <div class="container">
        <div id="branding">
          <h1><span class="highlight">OVKmusic</span></h1>
        </div>


        <nav>
          <ul>
            <li class="active"><a href="./registration/Welcome.php">Home</a></li>
              <li><a href="./registration/about.php">About</a></li> 
                  <li><a href="./registration/services.php">Services</a></li>
                   <li><a href="./registration/contact.php">Contact Us</a></li>
                    <li><a href="./registration/chatroom.php">Chatroom</a></li>
                     <li><a href="index.php?logout='1'" style="color:#e8419d;">Logout</a></li>
              

              </ul>
        </nav>
      </div>
      </header>


      
     <section id="upload-page">
	 <div class="container">


     



<?php


/*
if(isset($_POST['submit'])){
  

    
                    
     $file =$_FILES['file']['name'];
     $tmpName = $_FILES['file']['tmp_name']; 
     $fileSize= $_FILES['file'] ['size'];
     $fileType= $_FILES['file'] ['type'];

       $target = "./Uploads/" .basename($_FILES['file']['name']);

             
                     
      if(move_uploaded_file($_FILES['file'] ['tmp_name'], $target)){      
    
       echo "The file" .basename($file). "has been uploaded successfully.";
      
    } else {
        echo "There was an error uploading the file, please try again!";
         

         saveAudio( $target );
       
    }
}
*/

$dir='../webdev/upload/';
$file =$_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name']; 
$fileSize= $_FILES['file'] ['size'];
$fileType= $_FILES['file'] ['type'];

$target=$dir.basename($_FILES['file'] ['name']);

if(move_uploaded_file($_FILES['file'] ['tmp_name'],$target)){
    echo '';
    saveAudio($target);
    displayAudios();
} 


function displayAudios(){
     $conn= mysqli_connect("localhost", "root", "", "load") ;
     
    if (!$conn)
    {
        die ("no database found");
    }

     $query="SELECT * from music";
     $r= mysqli_query($conn,$query);

     while($row=mysqli_fetch_array($r))
     {
         $id = $row['id'];
         echo '<a href="../webdev/upload/playy.php?id='.$row['file'].'">'.$row['file'].'</a>';

         echo "<br />";
     }

      mysqli_close($conn);





    
}










function saveAudio($file){
$conn= mysqli_connect("localhost", "root", "", "load") ;

$file =$_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name']; 
$fileSize= $_FILES['file'] ['size'];
$fileType= $_FILES['file'] ['type'];

    if (!$conn)
    {
        die ("no database found");
    }

      $query="INSERT INTO music(file,tmpName,fileSize,fileType)
      VALUES('{$file}', '{$tmpName}', '{$fileSize}', '{$fileType}')"; 
      mysqli_query($conn,$query);


      if(mysqli_affected_rows($conn)>0)
      {
          echo "";
      }
       

       mysqli_close($conn);
    
 
}


?>

	
	 </div>
      </section>
       <hr />



    </body>
    </html>




