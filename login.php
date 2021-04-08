<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="Style.css">
  <link href="login.php">
</head>
<body>
<div class="header">
        <div class ="inner_header">
            <div cass="logo_container">
                <img src="logo.png" alt="" class="pic">
            </div>
  
            
        </div>   
    </div>
  
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="email" name="email" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div><br><br>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  <br><br><br><br><br><br><br>
  <footer class ="contact">
        <section class="sectionOne">
         <h2>About Us</h2>
         <i class='fas fa-folder-plus' style='font-size:20px;color:#8b008b;background-color: white; border-radius: 5px; width: 14%; padding-left: 2%; padding-right: 2%;'></i>
         <input type="button" name="" value="About" onclick="aboutButton()" target="_blank">
        </section>
        <section class="sectionTwo">
         <h2>Contact Us</h2>
         <i class='fas fa-at' style='font-size:20px;color:red;background-color: white; border-radius: 5px; width: 14%; padding-left: 2%;'></i>
         <input type="button" name="" value="Email">
         <br><br>
         <i class='fas fa-comment' style='font-size:20px;color:blue;background-color: white; border-radius: 5px; width: 14%; padding-left: 2%;'></i>
         <input type="button" name="" value="Chat">
        </section>
        <br><br><br><br><br><br>
        <div style="margin-left: 25%;">
         <h2 style="width: 15%;">Feedback</h2>
         <i class='fas fa-star' style='font-size:20px;color:#94800f;background-color: white; border-radius: 5px; width: 2.5%;'></i>
         <input  style="margin-left: 1%;" type="button" name="" value="Rate and Comment">
        </div>
   
      </footer>
</body>
</html>