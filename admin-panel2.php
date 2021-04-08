<!DOCTYPE html>
<?php 
$con=mysqli_connect("sql311.byethost8.com","b8_27314253","JINTU1998","b8_27314253_online_house_rent");

//include('newfunc.php');
if(isset($_POST['docsub1']))
{
  $email=$_POST['email'];
  $query="delete from users where email='$email';";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('User removed successfully!');</script>";
  }
  else{
    echo "<script>alert('Unable to delete!');</script>";
  }
}
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>House Management System</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        
    </head>
    <body>

        <header>
            <div class="left-area">
                <img src="logo.png" class="logo" alt="" padding-right="100" width="200px" height="79px" >
            </div>
        </header>
        <div class="sidebar">
                <img src="logo.png" class="logo" alt="" padding-right="100" width="200px" height="79px" padding-left="100px"></img>
                <br><br><br><br>
                <li><a href="Dashboard.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>Dashboard</a></li>
                <li><a href="Landlord.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>User details</a></li>
                <li><a href="Feedback.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>View Feedback</a></li>
                <li><a href="Apartment.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>View Apartment</a></li>
                <li><a href="admin-panel1.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>Add User</a></li>
                <li><a href="admin-panel2.php" target="_self"><i class="fa fa-circle" aria-hidden="true"></i>Delete User</a></li>

        </div>
        
        <div class="content">


<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        
      </div>
      <br><br>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel2.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="email" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Username" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>

      </body>

  
 </html>