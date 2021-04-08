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
        <div class="body">
        <h1 style="color:#376882">User Details</h1>
             <table border="1px solid black" style="width:100%">
                 <tr>

                     <th>ID</th>
                     <th>Username</th>
                     <th>Email</th>
                     <th>Address</th>
                     <th>Phone</th>
                     <th>Password</th>

                 </tr>
              <?php

                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<td>".$row["id"]."</td>";
                        
                        echo "<td>".$row["name"]."</td>";
                       
                        echo "<td>".$row["email"]."</td>";

                        echo "<td>".$row["address"]."</td>";

                        echo "<td>".$row["phone"]."</td>";
                        
                        echo "<td>".$row["password"]."</td>";

                        
                        
                       
                        echo "</tr>";
                    }
                } else {
                echo "0 results";
                }
                mysqli_close($conn);

                  ?>
                </table>
            </div>
        

           

         </footer>
    </body>
 </html>
