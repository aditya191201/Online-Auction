<?php
$con=mysqli_connect("localhost:8111","root","","bidding");
if(!$con)
{ 
 die('could not connect:' .mysqli_connect_error());
}

//mysql_select_db('bidding',$con);
?>