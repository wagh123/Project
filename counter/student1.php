<?php
    include './dbconn.php';

    $sql = "SELECT sid FROM studentreg";
                $query = $mysqli->query($sql);
                $num = $query->num_rows;
                $total = 200;
                if($num >= 1 || $num <= 200){
                    $result = $total - $num;
                   echo "$result";
                }
                else{
                   echo "rooms are not available";
                }

?>