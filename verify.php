<?php include('server.php'); 

 
 ?>




<!DOCTYPE html>
 <html>
  <head>
       <style type="text/css"></style>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Sign In</title>
    <link rel="stylesheet" href ="design.css">
  </head>


<body class="content">
  
    <header>

        <div class="container">
        <div id="branding">
          <h1><span class="highlight">OVKmusic</span></h1>
        </div>


     
      </header>
  <div class="header-box">
  <div id="header">
      <h2>Verify Details</h2>
      </div>
      <form method="post" action="withdrawal.php">
         <!--display validation errors here -->
            <?php include('errors.php'); ?>

            <table>
            <tr>
            <td>User Type</td>
            <td><select name="type">
            <option value="-1">Select User Type</option>
           
            <option value="Artist">Artist</option>
            
            </select></td>

            </tr>
            </table>

        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username">
          </div>
         
           <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
          </div>
         
            <div class="input-group">
             <button type="submit" name="loginn" class="btnn">Verify account details</button>
          </div>
         

        </form>
        </div>
      



    </body>
























    </html>