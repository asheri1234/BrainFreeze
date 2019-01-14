

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Upload</title>
    <link rel="stylesheet" href ="./registration/chatroom.css">
    </head>
    <body background= "header-background.jpg">

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
            <li><a href="Welcome.php">Home</a></li>
              <li><a href="services.php">Services</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                  <li ><a href="chatroom.php">Chatroom</a></li>
                   <li><a href="index.php?logout='1'" style="color:#e8419d;">Logout</a></li>
              </ul>
        </nav>

            <!--


        <div id="side-menu"  class="side-nav">
          <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
          <a href="#">Home</a>
          <a href="#">Profile</a>
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

              -->

         </header>

<form enctype="multipart/form-data"  method="post" action="testtest.php">
 <table border="3" width="550px" height="450px" align="center" color="#fff" >
         <tr>
         <td colspan="5" align="center"><font color="#fff"> Upload Track </font> </td>

         </tr>

  <tr>
         <td align="center">   <font color="#fff"> Track: </font></td>     <td>  <input type="file" name="file" accept="audio/mp3,audio/mpeg,audio/ogg" required/>  </td>
         </tr> 
  
    <tr>
         <td colspan="5" align="center">  <input type="submit" name="submit" value="Upload!"> </td>
         </tr>


      
         </table>
         </form>





    </body>
    </html>


      