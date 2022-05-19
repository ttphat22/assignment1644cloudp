<?php
    $conn = pg_connect("postgres://rrpqiprifkondy:84bf70d8cac18c8242f2c85e514742513e745028900cb927848041983738d6ca@ec2-3-229-166-245.compute-1.amazonaws.com:5432/d6l3pme0cvi7ek")
        if (!$conn){
            die("Can not connection to database");
        }
?>

