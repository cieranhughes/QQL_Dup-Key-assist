<?php

//Conect to database 'QQL_key-assist'
$dbconnect = mysqli_connect('10.0.1.23', 'localuser', 'L0calUs3r', 'QQL_key-assist', 3306);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

?>