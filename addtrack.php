
 
 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title> Welcome Admin</title>
       <link rel="stylesheet" href ="admin.css">
        <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
    
    
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

              

        <div id="side-menu"  class="side-nav">
          <a href="#" class="btn-close" onclick="closeSlidemenu()">&times;</a>
          <a href="#">Home</a>
          <a href="profile.php">Profile</a>
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

         

      <section class="section_1"></section>
      <section class="content">
	        <h1>The best music distribution website in Kenya</h1>
         <p>Take control of your style. Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.herLorem ipsum dolor sit amet, consectetur adipiscing elit.her
           
         </p>



              -->
       
          <ul class="navbar-nav">
            <li class="active"><a href="Welcome.php">Home</a></li>
                <li><a href="profile.php">Account</a></li>
                   <li><a href="contact.php">Contact Us</a></li>
                  
                  
                   <li><a href="index.php?logout='1'" style="color:#e8419d;">Logout</a></li>
              </ul>
        </nav>

        </div>
        </header>
        <script src="js/vendor/modernizr.js"></script>
         <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
</head>


<body>

<div style="height:50px;background-color:black;color:white;font-size:15px;font-weight:bold;">
    <p style="color:white; padding:20px; text-decoration:none"><a style="color:white;" href="addtrack.php">Edit/Delete Track</a></p>
    </div>
    <div id="div1">
   <div class="container">
   <div id="">
   <div>
   
<form action="" method="post">
        <label for="search">
        <span>Search</span>
      </label>
  <input name="search" type="search" autofocus><input type="submit" name="button">

</form>
        
     <?php
$con=mysqli_connect('localhost', 'root','', 'load');
$db=mysqli_select_db ($con,'load');


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $result=mysqli_query($con,"select * from music where file like '%{$search}%' || fileType like '%{$search}%' ");
  

	if(mysqli_num_rows($result)>0)
	{
		echo "<table>";
		echo "<tr><th>File Name</th><th>Filetype</th></tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			
			echo "<td>".$row['file']."</td>";
			echo "<td>".$row['fileType']."</td>";
		
			echo "</tr>";
		}
		echo "</table>";
	} else
		echo'no available records';
}	
?>


   </div>
   

<?php
$db=mysqli_connect("localhost","root","", "load");

$result=mysqli_query($db,"SELECT * FROM music");
if(isset($_GET['order'])){
  $order=$_GET['order'];
}else{
  $order = 'file';
}

if (isset($_GET['sort'])){
  $sort= $_GET['sort'];
}else{
  $sort = 'ASC';
}
$result = mysqli_query($db,"SELECT * FROM music ORDER BY $order $sort");



if(mysqli_num_rows($result)>0){
  echo"
    <table cellpadding=15 border=1px solid white >
    <tr><th><a href='?order= file && sort=$sort'>File</a></td>
    <th><a href='?order= fileType && sort=$sort'>File Type</a></td>
    </tr>

  
    ";
  while($row=mysqli_fetch_array($result)){
    $file=$row['file'];
    $fileType=$row['fileType'];
    echo"
    <tr>
    <td>".$row['file']."</td>
    <td>".$row['fileType']."</td>
    

    </tr><br>
    
    ";
   
  }
  echo "</table>";
}
?>


  </div>
  </div>

    </div>
</body>
</html>

               




<!--
                       <footer>
                        <nav>
                           <ul>
                               <a href="about.php">About</a></ul>
                           <ul><a href="services.php">Services</a></ul>
                           <ul><a href="contact.php">Contact Us</a>
                          </ul>
                        </nav>

                         <small> <a href="#" title="OVKmusic">OVKmusic 2018</a>,  Copyright &copy; 2018. All rights reserved.</small>

                         </footer>

                         -->

    


                     










     </div>
     
<div class="button">
    <button onclick="printContent('div1')">Print</button>
</div>

    </body>
    </html>








