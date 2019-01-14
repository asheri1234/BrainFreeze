

<?php 

mysql_connect("localhost", "root", "", "reports") or die("not connected to the database");
mysql_select_db("reports") or die ("no database found");

    
    if(isset($_POST['submit'])){
         
        
          $confirm=$_POST['confirm'];
         



        
         
         

          $query="INSERT INTO confirmation(confirm) 
          VALUES('$confirm')";
           $ros = mysql_query($query); 

           
   
    header('location: account.php'); 
        }
     



         ?>
 
 
 
 <form actiom="report.php" method="post" enctype="multipart/form-data"  style="margin-top:50px"  >
         <table border="3" width="550px" height="100px" align="center" color="#fff" >
         <tr>
         <td colspan="5" align="center"><font color="#000" size="10px">Confirm receipt</font> </td>

         </tr>
         <tr>
         <td align="center"> <font color="#000">Enter Confirmation code:</font> </td> <td>  <input type="text" name="confirm" required></td>
         </tr>
         
        
         
    <tr>
         <td colspan="5" align="center">  <input type="submit" name="submit" value="Request"> </td>
         </tr>


      
         </table>
         </form>
