<?php

function data_page($database, $pageid){

	# Page Setup
 $q = "SELECT * FROM strani WHERE id = $pageid";

 $resolve = mysqli_query($database, $q);
 #array
 $page = mysqli_fetch_assoc($resolve);


 return $page;


}


function clanek($database, $pageid){

	# Page Setup
 $q1 = "SELECT * FROM clanki WHERE id = $pageid";
 $resolve = mysqli_query($database, $q1);
 #array
 $clanek = mysqli_fetch_assoc($resolve);

 return $clanek;
}