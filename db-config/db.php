<?php 

$connection = mysqli_connect("localhost","root","","mobLearn");

if(!$connection){
    die("connection unsuccessful").mysqli_connect_error();
}
