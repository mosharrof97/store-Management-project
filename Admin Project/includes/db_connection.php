<?php 
$host = "mosharrof.online";
$dbuser = "mosharrof";
$dbpass = "tz$B^@*Fm5Vv";
$dbname = "mosharrof_storemanagement";

$con = new mysqli($host, $dbuser, $dbpass, $dbname);
if($con->connect_error){
    die("");
}
?>