<?php
session_start();

   $username="";
   $email="";
   $type="";
   $adminname="";
  
   $errors=array();


//connect to the database
$db=mysqli_connect('localhost','root', '','registration');

//if the register button is clicked
if (isset($_POST['register'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $type=mysqli_real_escape_string($db, $_POST['type']);
    $password_1=mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2=mysqli_real_escape_string($db, $_POST['password_2']);
    


    //ensure that form fields are filled properly

    if (empty($username)){
        array_push($errors, "Username is required");
    }
      if (empty($email)){
        array_push($errors, "Email is required");
    }

    
      if (empty($type)){
        array_push($errors, "Type is required");
    }


    
    
      if (empty($password_1)){
        array_push($errors, "Password is required");
    }
   
       if($password_1 != $password_2){
       array_push($errors, "The two passwords do not match");
      
   }
   //if there are no errors, save user to database
   if(count($errors)==0){
       
       $sql="INSERT INTO users (username, email,type, password) 
             VALUES ('$username', '$email', '$type', '$password_1')";
      
      
       mysqli_query($db, $sql);
       $_SESSION['username']=$username;
       $SESSION['success']= "You are now logged in";
       header('location: Welcome.php'); //redirect to homepage



   }
 }

// log user in from login page
if (isset($_POST['loginn'])){
     $username=mysqli_real_escape_string($db, $_POST['username']);
     $password=mysqli_real_escape_string($db, $_POST['password']);
     $type=mysqli_real_escape_string($db, $_POST['type']);


    //ensure that form fields are filled properly

    if (empty($username)){
        array_push($errors, "Username is required");
    }
      if (empty($password)){
        array_push($errors, "Password is required");
    }

    
      if (empty($type)){
        array_push($errors, "Type is required");
    }


    
    if(count($errors) == 0 ) {
        
        $query = "SELECT *FROM users WHERE username='$username' AND password='$password' and type='$type' ";
        $result = mysqli_query($db, $query);

        while($row= mysqli_fetch_array($result)){
            if($row['username']==$username && $row['password']==$password && $row['type']=='Admin')
            {
                header("Location: Welcome.php");   }
                
                
                elseif ($row['username']==$username && $row['password']==$password && $row['type']=='Artist')
                {
                    header("Location: Welcome.php");}
                
               elseif ($row['username']==$username && $row['password']==$password && $row['type']=='User')
               {
                    header("Location: Welcomeuser.php");
                }
                }

                /*
     
        if (mysqli_num_rows($result) == 1){
            // log user in
         $_SESSION['username']=$username;
         $_SESSION['success']= "You are now logged in";
         header('location: Welcome.php'); //redirect to homepage
        }else {
            array_push($errors, "wrong username/password combination");

        }

        */
    }
}
    
     


//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');

}







?>








