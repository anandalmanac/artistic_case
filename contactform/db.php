<?php
$server="sql207.epizy.com";
$username="	epiz_27407596";
$password="xWuM7NP6J1Kfd";
$dbname="epiz_27407596_code";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}