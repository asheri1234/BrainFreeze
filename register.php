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


        <nav>
          <ul>
            <li ><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li> 
                  <li><a href="services.php">Services</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                   <li class="active"><a href="register.php">Create Account</a></li>

              </ul>
        </nav>
      </div>
      </header>
  <div class="head">
      <h2>Register</h2>
      </div>
      <form method="post" action="">
        <div class="errors">
        <!--display validation errors here -->
            <?php include('errors.php'); ?>


            </div>



          
        <div class="input-group">
        <label> Username </label>
          <input type="text" name="username" value="<?php echo $username; ?>">
          </div>

           <div class="input-group">
          <label> Email </label>
          <input type="text" name="email" value="<?php echo $email; ?>">
          </div>

             
            <table>
            <tr>
            <td>User Type</td>
            <td><select name="type">
            <option value="-1">Select User Type</option>
          
            <option value="Artist">Artist</option>
            <option value="User">User</option>
            </select></td>

            </tr>
            </table>
           <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1">
          </div>
           <div class="input-group">
          <label>Confirm Password</label>
          <input type="password" name="password_2">
          </div>
            <div class="input-group">
             <button type="submit" name="register" class="btnn">Register</button>
          </div>
          <p>Already a member?<a href="login.php">Sign in</a></p>

        </form>

    </body>
























    </html>