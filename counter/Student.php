<?php
    include './dbconn.php';

    $sql = "SELECT sid FROM studentreg";
                $query = $mysqli->query($sql);
                $num = $query->num_rows;
                if($num >= 1){
                    echo "$num";
                }
                else{
                    echo "Not Allocated";
                }

?>