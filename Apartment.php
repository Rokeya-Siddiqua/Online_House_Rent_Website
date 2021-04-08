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
        <h1 style="color:#376882">View Apartment</h1>
             <table border="1px solid black" style="width:100%">
                 <tr>

                     <th>Location</th>
                     <th>Size</th>
                     <th>Price</th>
                     <th>Rooms</th>
                     <th>Bathrooms</th>
                     <th>Garage</th>
                     <th>Resident Type</th>
                     <th>Service charge</th>
                     <th>Pet</th>
                     <th>Direction</th>
                     <th>Nearby</th>
                     <th>Other</th>
                     <th>Contact</th>
                     <th>Email</th>

                 </tr>
              <?php

                $sql = "SELECT * FROM  houseinformationregister";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    echo "<tr>";
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<td>".$row["location"]."</td>";
                        
                        echo "<td>".$row["size"]."</td>";
                       
                        echo "<td>".$row["price"]."</td>";

                        echo "<td>".$row["room"]."</td>";

                        echo "<td>".$row["bathroom"]."</td>";

                        echo "<td>".$row["garage"]."</td>";
                        
                        echo "<td>".$row["resident"]."</td>";

                        echo "<td>".$row["service"]."</td>";
                        
                        echo "<td>".$row["pet"]."</td>";
                       
                        echo "<td>".$row["direction"]."</td>";

                        echo "<td>".$row["nearby"]."</td>";

                        echo "<td>".$row["other"]."</td>";
                        
                        echo "<td>".$row["contact"]."</td>";

                        echo "<td>".$row["email"]."</td>";

                        
                        
                        
                       
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
