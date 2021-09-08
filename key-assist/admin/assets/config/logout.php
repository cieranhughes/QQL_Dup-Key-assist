<?php

//Access Session
session_start();

//Clear varables
$_SESSION['loggedin'] = NULL;
$_SESSION['userID'] = NULL;
$_SESSION['searchDate'] = NULL;
$_SESSION['searchSpotID'] = NULL;

//Destroy Session
session_destroy();

//View Login File
header('Location: /admin/index.html');

?>