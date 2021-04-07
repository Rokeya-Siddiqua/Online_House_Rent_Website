<<html>
  <head>
     <meta charset = "utf-8">
     <title> Feedback </title>
     <link rel="stylesheet" href="demoPageStyle.css">
   <body>
      
     <!--                         header start             -->
        <div class="header">
          <div class="logo_container">
              <img src="logo.png" alt="" class="pic">
          </div>
          <div style="float: right;">
            <table class="navigation" style="margin-top: 10px;"> 
              <tr>
                <td><a href="homePage.php" target="_self"><span style="font-size: 25px; color: white; padding: 20px;">Home</span></a></td>
                <td><a href="landlordPage.php" target="_self"><span style="font-size: 25px;color: white;padding: 20px;">Landlord</span></a></td>
                <td><a href="tenantPage.php" target="_self"><span style="font-size: 25px;color: white;padding: 20px;">Tenant</span></a></td>
                <td><a href="fAQPage.php" target="_self"><span style="font-size: 25px;color: white;padding: 20px;">Help</span></a></td>
              </tr>
           </table>
          </div>
    </div>
          <br>
          <form method="post" action="Feedback1.php">
          <div class="h1">
          <label>Name:<input type="text" name="Name" style="border-style: solid" /></label>
          <span style="padding-left: 60px"></span>
          <br><br>


          <label>Email:<input type="text" name="Email" style="border-style: solid" /></label>
          <span style="padding-left: 61px"></span>
          <br><br>


          <label>Feedback:<input type="text" name="Feedback"  style="border-style: solid;height: 90px; width: 200px;"/></label>
          <span style="padding-left: 30px"></span>
          <br><br>

      
          <span style="padding-left: 120px"></span>
          <input type="submit" name="submit" value="submit" style="border-radius: 8px; width: 100px;"><br><br>
        </div>
        <footer class ="contact">
        <section class="sectionOne">
         <h2>About Us</h2>
         <i class='fas fa-folder-plus' style='font-size:20px;color:#8b008b;background-color: white; border-radius: 5px; width: 14%; padding-left: 2%;'></i>
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
         <a href="Feedback1.php" target="_self"><input  style="margin-left: 1%;" type="button" name="" value="Rate and Comment">
        </div>
   
      </footer>

   </body>
   </html>
  <?php
    $servername = "sql311.byethost8.com";
    $username = "b8_27314253";
    $password = "JINTU1998";
    $dbname = "b8_27314253_online_house_rent";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
  else{
      echo "Connected";

  }


  if (isset($_POST['submit'])) {

    header('Location:Feedback1.php');


$Name = mysqli_real_escape_string($conn,trim($_POST['Name']));
$Email = mysqli_real_escape_string($conn,trim($_POST['Email']));
$Feedback = mysqli_real_escape_string($conn,trim($_POST['Feedback']));

  $sqlinsert = "INSERT INTO `feedback` (Name , Email,Feedback) VALUES ('" . $Name . "','" . $Email . "','" . $Feedback . "')";
 
  if (!mysqli_query($conn, $sqlinsert)) {
      die('error inserting new record');
      }

      echo "1 record added to the database";


}