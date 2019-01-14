
 
 
 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title> Welcome Admin</title>
       <link rel="stylesheet" href ="admin.css">
    
    
  </head>
  <body>

    <header>

      
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">OVKmusic</span></h1>
              </div>

              
            

   <!--
        <nav class="navbar">
         <span class="open-slide">
        <a href="#" onclick="openSlidemenu()">
        <svg width="30" height="30" >
            <path d="M0, 5 30,5" stroke="#fff" stroke-width="5"/>
             <path d="M0, 14 30,14" stroke="#fff" stroke-width="5"/>
              <path d="M0, 23 30,23" stroke="#fff" stroke-width="5"/>
              </svg>
              </a>
              </span>

              

        <div id="side-menu"  class="side-nav">
          <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
          <a href="#">Home</a>
          <a href="profile.php">Profile</a>
          <a href="upload.php">Upload</a>
          <a href="#">Chatroom</a>

      </div>
     

         <script>
           function openSlidemenu(){
             document.getElementbyId('side-menu').style.width='250px';
              document.getElementbyId('main').style.marginLeft='250px';
           }

              function closeSlidemenu(){
             document.getElementbyId('side-menu').style.width='0px';
              document.getElementbyId('main').style.marginLeft='0px';
           }
         
         
         </script>

         

      <section class="section_1"></section>
      <section class="content">
	        <h1>The best music distribution website in Kenya</h1>
         <p>Take control of your style. Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           
         </p>



              -->
       
          <ul class="navbar-nav">
            <li class="active"><a href="Welcome.php">Home</a></li>
                <li><a href="profile.php">Account</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                  
                  
                   <li><a href="index.php?logout='1'" style="color:#e8419d;">Logout</a></li>
              </ul>
        </nav>

        </div>
        </header>
        <script src="js/vendor/modernizr.js"></script>
</head>


<body>

<div style="height:50px;background-color:black;color:white;font-size:15px;font-weight:bold;">
    <p style="color:white; padding:20px; text-decoration:none"><a style="color:white;" href="addtrack.php">All Tracks</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a style="color:white;" href="allusers.php">All Users</a></p>
    </div>

   <form method="post" action="edit.php" style="margin-top:50px;border:1px solid black;width:300px;margin-left:150px">
   <?php
   $db=mysqli_connect("localhost","root","", "load");
   $id=$_REQUEST['id'];
   $result=mysqli_query($db,"SELECT * FROM music where id='$id'");
   $row=mysqli_fetch_array($result);
   ?>
   <div>File Name
   <input type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="text" name="file" value="<?php echo $row['file'];?>">
          </div>
          <div>File Type
          <input type="text" name="fileType" value="<?php echo $row['fileType'];?>">
          </div>
         
          <div><input type="submit" name="edit" value="Edit"></div>
   </form>
   <?php

    
   if(isset($_POST['edit'])){
   
   $file=$_POST['file'];
   $fileType=$_POST['fileType'];
  

   $res=mysqli_query($db,"UPDATE music SET file='$file',fileType='$fileType' WHERE id='$id'") or die("error::".mysqli_error($db));
   if($res){
       header('location:addtrack.php');
   }
   
}
   ?>
</body>
</html>
