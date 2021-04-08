<!DOCTYPE html>
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
				
                <h1 style="color:#376882">Dashboard</h1>
                <table  style="width:100%">
                 <tr>

                     <th><img class="logo"src="user.png" width=140></th>
                     <th><img class="logo"src="feedback.png" width=140></th>
                     <th><img class="logo"src="apartment.png" width=145></th>
                 </tr>
                
                <table  style="width:100%">
                 <tr>

                     <th><a href="Landlord.php" target="_self">User details</a></th>
                     <th><a href="Feedback.php" target="_self">View Feedback</a></th>
                     <th><a href="Apartment.php" target="_self">View Apartment</a></th>
                 </tr>
                </table>
                 <br><br><br><br><br><br>
                
         
          <table  style="width:100%">
                 <tr>

                     <th><img class="logo"src="add.png" width=140></th>
                     <th><img class="logo"src="delete.png" width=140></th>
                 </tr>
                 <table  style="width:100%">
                 <tr>

                     <th><a href="admin-panel1.php" target="_self">Add User</a></th>
                     <th><a href="admin-panel2.php" target="_self">Delete User</a></th>
                 </tr>
</table>
          

        </div>
    </body>

</html>