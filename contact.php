 
 <?php
 




//connect to the database
$db=mysqli_connect('localhost','root', '','subscribers');

//if the register button is clicked
if (isset($_POST['submit'])){
   
    $email=mysqli_real_escape_string($db, $_POST['email']);

     $sql="INSERT INTO subscription ( email) 
             VALUES ('$email')";
      
      
              
               
        $ros=mysqli_query($db, $sql);
}



 ?>
 <!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width">
       <meta name = "description" content="online artist management and music distribution sytem">
         <meta name = "keywords" content="artist, artist management, music distribution, online artist management system, online music distribution system, ">
           <meta name = "author" content="Asheri Collins Mwazaule">
    <title>Contact-Us</title>
    <link rel="stylesheet" href ="index.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">

          <h1><span class="highlight">OVKmusic</span></h1>
        </div>
        <nav>
          <ul>
            <li> <a href="index.php">Home</a></li>
              <li ><a href="about.php">About</a></li>
                <li class="active"><a href="services.php">Services</a></li>
               
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="login.php">Sign In</a></li>
          </ul>
        </nav>
      </div>
      </header>

      
     <section id="newsletter">
	 <div class="container">
         
	 <h1>Subscribe to our newsletter</h1>
	 <form actiom="contact.php" method="post" enctype="multipart/form-data">
	 <input type="email" name="email" placeholder="Enter Email..." >
	 <button type="submit" name="submit" class="button_1">Subscribe</button>
	 </form>
	 </div>
      </section>
       <hr />

	  <section id="main">
	  <div class="container">
	  <article id="c">
    
        <ul id="services">
      <a href=""> 
            <li>
                <h1 class="article-title"> Follow us on Twitter  </h1>
              <img src="28logo1.jpg">
                </li>
                </a>
                <hr />

            <a href="">       
         <li>
             <h1 class="article-title">Subscribe to our Youtube channel </h1>
             <img src="img3_2.jpg">
             </li>
             </a>
                <hr />
         
               <li>
              <h1 class="article-title"> Reach us through our official whatsapp no. </h1>
               <img src="img5_2.jpg" style="width:400px; height:300px;">
                <h1 class="article-title"> Tel No:0717485924 </h1>
               
                </li>
                
                   <hr />




           <a href="">  
               <li>
             <h1 class="article-title"> Follow us on Instagram </h1>
                 <img src="maxresdefault.jpg" style="width:400px">
              </li>
              </a>
                 <hr />

                 
               <li>
              <h1 class="article-title"> Business Numbers. </h1>
               <img src="img1.jpg" style="width:400px; height:300px;">
                <h1 class="article-title"> Office No: <h2>020 456-345</h2> </h1>
                  <h1 class="article-title"> Tel No 1: <h2>0723 570 013</h2> </h1>
                    <h1 class="article-title"> Tel No 2: <h2>0746 850 903</h2> </h1>
                      <h1 class="article-title"> E-mail: <h2>ovkmusic2018@gmail.com</h2> </h1>
               
                </li>
                
                   <hr />



                 
           

            </ul>
            </article>

            <!--

            <aside id="sidebarr">
                <div class="dark">
                  <h1>Get A Quote</h1>
                  <form class="quote">
                      <div>
                        <label>Name</label><br />
                        <input type="text" placeholder="name">
                        </div>
                        <div>
                        <label>Email</label><br />
                        <input type="email" placeholder="Email address">
                        </div>
                        <div>
                            <label>Message</label><br />
                            <textarea placeholder="message"></textarea>
                            </div>
                            <button class="button_1" type="submit">Send</button>
                            </form>
                            </div>
                            </aside>
                            -->








</div>
</section>


    <!--insert footer-->
    
	<footer>
  <nav>
    <ul>
       <a href="about.php">About</a></ul>
          <ul><a href="services.php">Services</a></ul>
          <ul><a href="contact.php">Contact Us</a>
        </ul>
  </nav>
	<p><span class="highlight">OVKmusic</span>, The best music distribution platform in Kenya, Copyright &copy; 2018.</p>


	</footer>
  </body>

  	




</html>
