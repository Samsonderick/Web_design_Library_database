<?php
require "dbconnect.php";

$author = $_REQUEST['author'];
$title = $_REQUEST['title'];
$category = $_REQUEST['category'];
$year = $_REQUEST['year'];
$isbn = $_REQUEST['isbn'];
 
$sql = "INSERT INTO staff values('$author','$title','$category','$year','$isbn')";

if($conn -> query($sql)===True){
    echo "records inserted";
}else{
    echo "error";
}
?>