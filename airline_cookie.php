
<?php
//$departure = $_SESSION['departure']; 
//$_SESSION['departure'] = $_GET['departure']; 
$_SESSION['departure'] = '1'; 
$_SESSION['date'] = '2'; 
// $_COOKIE['ckDeparture'] = 1; 
// $_COOKIE['ckDate'] = 2; 

echo "departure".$_GET['departure'];
echo "ssdeparture".$_SESSION['departure'];
echo "date".$_GET['date'];
