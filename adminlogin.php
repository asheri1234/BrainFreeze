

<?php

session_start();

  
   $adminname="";
   $password="";
  
   $errors=array();



$db=mysqli_connect("localhost", "root", "", "registration") or die("not connected to the database");

    
  


if (isset($_POST['login'])){

     $adminname=$_POST['username'];
     $password=$_POST['password'];
     
   
     


    //ensure that form fields are filled properly

    if (empty($adminname)){
        array_push($errors, "Adminname is required");
    }
      if (empty($password)){
        array_push($errors, "Password is required");
    }

    
    if(count($errors) == 0 ) {
        
        $query = "SELECT *FROM admin WHERE adminname='$adminname' AND password='$password'";
        $result = mysqli_query($db, $query);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);


         if( $count == 1){

          header("location:adminwelcome.php");

         }
      
                }
    }



     



         
         

         
         



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
            <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li> 
                  <li><a href="services.php">Services</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                   <li><a href="register.php">Create Account</a></li>

              </ul>
        </nav>
      </div>
      </header>
  <div class="header-box">
  <div id="header">
      <h2>LOG IN</h2>
      </div>
      <form method="post" action="adminlogin.php">
         <!--display validation errors here -->
           <?php include('errors.php'); ?>
           
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username">
          </div>
         
           <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
          </div>
         
            <div class="input-group">
             <button type="submit" name="login" class="btnn">Log In</button>
          </div>
         
          

        </form>
        </div>
      



    </body>
























    </html>