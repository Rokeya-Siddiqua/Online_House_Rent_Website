<?php
  $servername = "sql311.byethost8.com";
  $username = "b8_27314253";
  $password = "JINTU1998";
  $dbname = "b8_27314253_online_house_rent";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="style.css">
        <title></title>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <meta charset="utf-8">
        <title>Portfolio</title>
    </head>
    <body>

        <div class="header">
            <div class ="inner_header">
                <div cass="logo_container">
                    <img src="logo.png" alt="" class="pic">
                </div>
            </div>   
        </div>
        

        <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                <h1>Login as Admin</h1>
                                <form method="post" action="func3.php">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name *" name="Username1" onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                        


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="Password2" required/>
                                        </div>
                                        
                                        <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                    </div>
                                </div>
                            </form>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        

        
        

<footer class ="contact">
    <section class="sectionOne">
     <h2>About Us</h2>
     <i class='fas fa-folder-plus' style='font-size:20px;color:#8b008b;background-color: white; border-radius: 5px; width: 14%; padding-left: 2%;'></i>
     <input type="button" name="" value="About">
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
  