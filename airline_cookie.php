
<?php
//$departure = $_SESSION['departure']; 
//$_SESSION['departure'] = $_GET['departure']; 
$_SESSION['departure'] = $_GET['departure']; 
$_SESSION['date'] = $_GET['date']; 
// $_COOKIE['ckDeparture'] = 1; 
// $_COOKIE['ckDate'] = 2; 

error_log('--$_GET error : '.$_GET['departure']);
error_log('--$_GET error : '.$_GET['date']);
