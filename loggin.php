 
     <!-- ==============================================
	 Login Section
	 ================================================ -->
	  <section class="login" id="login">
	   <div class="container">
	    <?php echo $message; ?>
	    <!--<div class="row">
		  <div class="col-lg-4 col-lg-offset-4">-->
		 <div class="col-md-4"></div>
		 <!--<div class="col-md-4"></div>-->
		 <div class="col-md-4">
				<h1 style="color:white"class="text-center">KENAFF online System</h1>
				<br>
				<div class="panel panel-info">
				
				<div class="panel-body">
				<form method="post" id="loginform"> 
				  <div class="form-group">
				    <label for="name">Username</label>
					<input name="username" type="text" class="form-control" placeholder="Enter Username...">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
					<input name="password" type="password" class="form-control"  placeholder="Enter Password...">
				  </div>
				  <div class="form-group">
				    <label for="usertype">User Type</label>
					<select name="usertype" type="text" class="form-control" >
					  <option value="admin">Admin</option>
					  <option value="client">Client</option>
					  <option value="farmer">Farmer</option>
					  <option value="govt">Experts</option>
					 </select>
				  </div>
				  <div>
				  <br/>
				  <button type="submit" name="login" class="btn btn-large btn-info full-width"><a i class="fa fa-unlock"></a> LOGIN</button><br/><br/>
				  </span> 
				  <a href="register.php" class="btn btn-large btn-info full-width">Client Registration</a>
				  <a href="farmerregister.php" class="btn btn-large btn-info full-width">Farmer Registration</a>
				  				  <a href="expertregister.php" class="btn btn-large btn-info full-width">Experts Registration</a>
				  
				  
				  </div>
				</form>
			</div><!-- /.col-lg-7 -->
			</div>
			</div>
			
		 </div><!-- /.row -->	
	  </div><!-- /.container -->
	</section>