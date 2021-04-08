<!DOCTYPE html>
<?php 
$con=mysqli_connect("sql311.byethost8.com","b8_27314253","JINTU1998","b8_27314253_online_house_rent");

//include('newfunc.php');

if(isset($_POST['docsub']))
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $query="insert into users(id,name,email,address,phone,password)values('$id','$name','$email','$address','$phone','$password')";
  $result=mysqli_query($con,$query);
  if($result)
    {
      echo "<script>alert('User added successfully!');</script>";
  }
}
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>House Management System)</title>
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
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          <div class="col-md-4"><label>User ID:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="id" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>User Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="name" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="email" required></div><br><br>
                  <div class="col-md-4"><label>Address:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="address" required></div><br><br>
                  <div class="col-md-4"><label>Phone:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="phone" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="password" id="password"  required></div><br><br>
                  
                  
                  
          <input type="submit" name="docsub" value="Add Username" class="btn btn-primary">
        </form>
      </div>
      <br><br>

      </body>
  
 </html>