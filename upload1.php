
<?php 
    
function saveAudio($filename){

mysql_connect("localhost", "root", "", "upload") or die("not connected to the database");
mysql_select_db("upload") or die ("no databse found");
}
    

    if(isset($_POST['save_audio']) && $_POST['save_audio'] =="upload audio"){
          
          $dir='Uploads/';
          $audio_path=$dir .basename($_FILES['audioFile']['name']);
          if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)){
            echo 'uploaded successfully.';
            saveAudio($audio_path);
          }
       }
   
      
           
          $name=$_POST['name']; 
          $title=$_POST['title'];
          $aname=$_POST['aname'];
          $gname=$_POST['gname'];
          $extension=$_POST['extension'];
          $filename=$_POST['filename'];
         

          $query="INSERT INTO upload_details(name,title,aname,gname,extension,filename) 
          VALUES('$name', '$title', '$aname', '$gname', '$extension', '$filename')";

          mysqli_query($conn,$query);

          if(mysqli_affected_rows($conn)>0)
          {
            echo "audio file path saved in database.";
          }

          mysqli_close($conn); {

         
    }


 ?>


