<?php

    function conectionEnd($value)
    {
        mysqli_close($value);
    }

    function fetch($value='')
    {
        include("connection.php");

            $sql = "SELECT * FROM houseinformationregister WHERE price LIKE '%{$value}%' OR 
            location LIKE '%{$value}%' OR resident LIKE '%{$value}%' LIMIT 5";
         
            $result = mysqli_query($conn, $sql);

            $output = '';
      
            if($result) {
                $output = "<ul style='margin-left: 60px'>";

               while ($row = mysqlI_fetch_assoc($result)) {
                $output.= "<li class='listClass'>";
                    $output.= "<article style='background-color: black;'>";
                        $output.= "<div class='pictureClass'>";
                            $output.= '<img src="data:image; base64,'.base64_encode($row['pictureURI']).'" alt="" style="width: 250px; height: 250px;">';                
                        $output.= "</div>";

                        $output.= "<div class='detailsClass'>";
                            $output.= "<div style='margin-left: 10px;'>";
                                $output.= "<br>";
                                $output.= "<label style='font-size: 25px; font-weight: bolder; font-style: italic;'>BDT </label>";
                                $output.= "<span style='padding-left: 10px;'></span>";
                                $output.= "<label style='font-size: 40px; font-weight: bolder; color: rgb(43, 27, 4);'>".$row['price']."</label> <br>";
                                $output.= "<label style='font-size: 20px; font-weight: bolder;'>Location: </label>";
                                $output.= "<span style='padding-left: 10px;'></span>";
                                $output.= "<label style='font-size: 25px; font-weight: bolder; color: rgb(16, 3, 73);'>".$row['location']."</label><br> <br>";
                                $output.= "<label style='font-size: 20px; font-weight: bolder;'>Resident type: </label>";
                                $output.= "<span style='padding-left: 10px;'></span>";
                                $output.= "<label style='font-size: 20px; font-weight: bolder; color: rgb(2, 49, 18);'>".$row['resident']."</label> <br> <br>";        
                                $output.= "<button class='submitButton'><a class='submitButton' href='http://www.rokeyasiddiqua.byethost8.com/Beta_Online_House_Rent/houseInformationDetailsPage.html?email=".$row["email"]."'>Click here for Details</a></button> <br> <br>";
                            $output.= "</div>";
                        $output.= "</div>";
                    $output.= "</article>";
                $output.= "</li>";
               }  
               $output.= "</ul>";
               echo $output; 
         } else {
            echo "Error :".$sql."<br>".mysqli_error($connection);
        }
        conectionEnd($conn);
        }
        if (isset($_GET['search'])) {
            fetch($_GET['search']);
        }
              

?> 