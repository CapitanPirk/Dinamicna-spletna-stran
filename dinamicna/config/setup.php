<?php
// Setup File:

# Database Conection
$database = mysqli_connect('localhost', 'jure', 'geslo', 'mydatabase') OR die("acces denied") ;
$database->set_charset("utf8");

#Konstante



#include functions
include("functions/data.php");


$site_title = "Pozna Antika";
$page_title = "Home";

if(isset($_GET['page'])) {

	$pageid = $_GET['page']; // id nastavim na tolk kukr je v browserju

}
else{
	$pageid = 1; // če ni naveden v browserju, nastavim na 1
}

#stran
 $page = data_page($database, $pageid);

 $clanek = clanek($database, $pageid);


?>