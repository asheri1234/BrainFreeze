
 
 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title> Requested withdrawals</title>
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
    <p style="color:white; padding:20px; text-decoration:none"><a style="color:white;" href="addtrack.php">Requested Withdrawals</a></p>
    </div>
    <div id="div1">
   <div class="container">
   <div id="">

        
<form action="" method="post">
        <label for="search">
        <span>Search</span>
      </label>
  <input name="search" type="search" autofocus><input type="submit" name="button">

</form>


   
     <?php
$con=mysqli_connect('localhost', 'root','', 'reports');
$db=mysqli_select_db ($con,'reports');


if(isset($_POST['button'])){    //trigger button click

  $search=$_POST['search'];

  $result=mysqli_query($con,"select * from withdrawal where username like '%{$search}%' || bname like '%{$search}%' || bbranch like  '%{$search}%' ||acc like '%{$search}%' ||balance like '%{$search}%'  ");
  

	if(mysqli_num_rows($result)>0)
	{
		echo "<table>";
		echo "<tr><th>  Username</th><th>Bank</th> 
              <th>  Branch</th><th>Account</th>
              <th>Balance</th>   </tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['bname']."</td>";
      echo "<td>".$row['bbranch']."</td>";
      echo "<td>".$row['acc']."</td>";
      echo "<td>".$row['balance']."</td>";
		
			echo "</tr>";
		}
		echo "</table>";
	} else
		echo'no available records';
}	
?>



   

<?php
$db=mysqli_connect("localhost","root","", "reports");

$result=mysqli_query($db,"SELECT * FROM withdrawal");
if(isset($_GET['order'])){
  $order=$_GET['order'];
}else{
  $order = 'acc';
}

if (isset($_GET['sort'])){
  $sort= $_GET['sort'];
}else{
  $sort = 'ASC';
}
$result = mysqli_query($db,"SELECT * FROM withdrawal ORDER BY $order $sort");



if(mysqli_num_rows($result)>0){
  echo"
    <table cellpadding=15 border=1px solid white >
    
    <tr>
     <th>Username</th>
     <th><a href='?order= bname && sort=$sort'>Bank Name</a></td>
    <th>Bank Branch</td>
     
    <th><a href='?order= acc && sort=$sort'>Account Number</a></td>
    <th>Account Balance</a></td>
     <th>Pay</a></td>
    
    </tr>


  
    ";
  while($row=mysqli_fetch_array($result)){
    $username=$row['username'];
    $bname=$row['bname'];
    $bbranch=$row['bbranch'];
    $acc=$row['acc'];
    $balance=$row['balance'];

    echo"
    <tr>
    <td>".$row['username']."</td>
    <td>".$row['bname']."</td>
    <td>".$row['bbranch']."</td>
     <td>".$row['acc']."</td>
     <td>".$row['balance']."</td>
     <td><a href='pay.php?id=".$row['id']."'>PAY</a></td>
    

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








