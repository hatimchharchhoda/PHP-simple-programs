<?php
    $servername = "localhost";
    $user = "root";
    $databasename="exam";
    $con = mysqli_connect($servername,$user,"" ,$databasename);
    if(!$con){
        die("not created");
    }
    echo "databasee created succesfully<br><br>";

    $query = "SELECT * FROM TABLENAME";
    $result = mysqli_query($con,$query);
    while( $row = mysqli_fetch_assoc($result)){
        echo " Name : $row['name']";
    }

    mysqli_close($con);
?>