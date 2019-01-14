

<?php 

mysql_connect("localhost", "root", "", "reports") or die("not connected to the database");
mysql_select_db("reports") or die ("no database found");

    
    if(isset($_POST['submit'])){
         
          $username=$_POST['username'];
          $bname=$_POST['bname'];
          $bbranch=$_POST['bbranch']; 
          $acc=$_POST['acc'];  
         



        
         
         

          $query="INSERT INTO withdrawal(username,bname, bbranch, acc) 
          VALUES('$username','$bname', '$bbranch', '$acc')";
           $ros = mysql_query($query); 

           
   
    header('location: account.php'); 
        }
     



         ?>
 
 
 
 <form actiom="report.php" method="post" enctype="multipart/form-data"  style="margin-top:50px"  >
         <table border="3" width="550px" height="100px" align="center" color="#fff" >
         <tr>
         <td colspan="5" align="center"><font color="#000" size="10px">Request Withdrawal</font> </td>

         </tr>
          <tr>
         <td align="center"> <font color="#000">Username:</font> </td> <td>  <input type="text" name="username" required></td>
         </tr>
         <tr>
         <td align="center"> <font color="#000">Bank Name:</font> </td> <td>  <input type="text" name="bname" required></td>
         </tr>
          <tr>
         <td align="center"> <font color="#000">Bank Branch:</font> </td> <td>  <input type="text" name="bbranch" required></td>
         </tr>
         <tr>
         <td align="center"> <font color="#000">Bank Account Number:</font> </td> <td>  <input type="text" name="acc" required></td>
         </tr>
         
    <tr>
         <td colspan="5" align="center">  <input type="submit" name="submit" value="Request"> </td>
         </tr>


      
         </table>
         </form>
