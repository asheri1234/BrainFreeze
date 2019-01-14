

<?php 

mysql_connect("localhost", "root", "", "reports") or die("not connected to the database");
mysql_select_db("reports") or die ("no database found");

    
    if(isset($_POST['submit'])){
         
          $username=$_POST['username'];
          $email=$_POST['email'];  

         



        
         
         

          $query="INSERT INTO report(username,email) 
          VALUES('$username', '$email')";
           $ros = mysql_query($query); 
        

           
   
            
    header('location: account.php'); 
        }

        ?>
 
 <style>
     body{
         background:#000;
     }
     </style>
 
 <form actiom="report.php" method="post" enctype="multipart/form-data"  style="margin-top:50px"  >
         <table border="3" width="550px" height="40px" align="center" color="#fff" >
         <tr>
         <td colspan="5" align="center"><font color="#fff" size="10px">Request Report</font> </td>

         </tr>
         <tr>
         <td align="center"> <font color="#fff">Username:</font> </td> <td>  <input type="text" name="username" required></td>
         </tr>
          <tr>
         <td align="center"> <font color="#fff">E-mail:</font> </td> <td>  <input type="text" name="email" required></td>
         </tr>
         
    <tr>
         <td colspan="5" align="center">  <input type="submit" name="submit" value="Request"> </td>
         </tr>


      
         </table>
         </form>
