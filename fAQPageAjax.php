<?php

    function conectionEnd($value1)
    {
        mysqli_close($value1);
    }

    function fetch1($value1='')
    {
        include("connection.php");

            $sql = "SELECT * FROM askQuestion WHERE qsn LIKE '%{$value1}%' ";
         
            $result = mysqli_query($conn, $sql);

            $output1 = '';
      
            if($result) {
                $output1 = "<table border='2px solid black' style='background-color: #abaaa7; width: 100%; height: fit-content;'>";
                $output1.= "<tr>";
                $output1.= "<th>Question</th>";
                $output1.= "<th>Answer</th>";
                $output1.= "</tr>";
                

               while ($row = mysqlI_fetch_assoc($result)) {
                $output1.= "<tr>";
                   $output1.= "<td>".$row['qsn']."</td>";
                   $output1.= "<td>".$row['ans']."</td>";
                $output1.= "</tr>";
               }  
               $output1.= "</table>";
               echo $output1; 
         } else {
            echo "Error :".$sql."<br>".mysqli_error($conn);
        }
        conectionEnd($conn);
        }
        if (isset($_GET['search1'])) {
            fetch1($_GET['search1']);
        }
              

?> 