
<?php include('server.php'); ?>

 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Chatroom</title>
    <link rel="stylesheet" href ="chatroom.css">
    
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

              -->
       
          <ul class="navbar-nav">
                <li class="active"><a href="Welcome.php">Home</a></li>
                <li><a href="profile.php">Account</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                  <li class="active"><a href="chatroom.php">Chatroom</a></li>
                   <li><a href="index.php?logout='1'" style="color:#e8419d;">Logout</a></li>
              </ul>
        </nav>

            <!--


        <div id="side-menu"  class="side-nav">
          <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
          <a href="#">Home</a>
          <a href="#">Profile</a>
          <a href="#">Upload</a>
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

              -->

         </header>

     <!--

      <section class="section_1"></section>
      <section class="content">
	        <h1>The best music distribution website in Kenya</h1>
         <p>Take control of your style. Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           
         </p>

       -->

  


        <div id="main">
        <div id="message_area">
          <?php 
         


          if(isset($_POST['submit'])){
            $message = mysqli_real_escape_string($db, $_POST['message']);
            $username = mysqli_real_escape_string($db, $_POST['username']);

          $sql='INSERT INTO message (id, message, username)
          VALUES ("", "'.$message.'","'.$_SESSION['username'].'")';

         if(mysqli_query($db, $sql)){
           echo'<h4 style="color: red">'
           .$_SESSION['username'].'</h4>';

           echo '<p>'.$message.'</p>';

         
           }
         }


          ?>
          </div>
        
          <form method="post">
            <input type="text" name="message" style="width:440px; height: 50px;" placeholder="Type your message" />
            <input type="submit" name="submit" style="height: 50px;" value="message"  />
            </form>





            </div>



    </body>
    </html>