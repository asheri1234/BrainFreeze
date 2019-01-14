
         




<?php 

mysql_connect("localhost", "root", "", "upload") or die("not connected to the database");
mysql_select_db("upload") or die ("no database found");
    
    if(isset($_POST['submit'])){
                  
          $file =$_FILES['file']['name'];
          $tmpName = $_FILES['file']["tmp_name"]; 
          $fileSize= $_FILES['file'] ['size'];
          $fileType= $_FILES['file'] ['type'];

 
       
         $target = "./upload/" .basename($_FILES['file']['name']);



        
         
         

          $query="INSERT INTO upload_details(file, tmpName, fileSize, fileType) 
          VALUES('$file', '$tmpName', '$fileSize', '$fileType')";
           $ros = mysql_query($query); 

           
   
    if(move_uploaded_file($_FILES['file'] ['tmp_name'], $target)) {
        echo "The file " . basename($_FILES['file']['name']) . "has been uploaded";
    } else {
        echo "There was an error uploading the file, please try again!";
        
       
    }
    
        }
     



         
         



 ?>

 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Chill| Welcome</title>
       <link rel="stylesheet" href ="style.css">
    
    
  </head>
  <body>
  
    <header>

        <div class="container">
        <div id="branding">
          <h1><span class="highlight">OVKmusic</span></h1>
        </div>


        <nav>
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
              <li><a href="about.html">About</a></li>
                <li><a href="Pricing.html">Pricing</a></li>
                  <li><a href="Services.html">Services</a></li>
                   <li><a href="register.php">Create Account</a></li>

              </ul>
        </nav>
      </div>
      </header>
















  </body>
  </html>