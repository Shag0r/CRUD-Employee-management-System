<!-- this page is created to perform delete information  -->

<?php
// echo "hello Bangladesh";
// includein the user_Class here 
include "User.php";
// creating an object for the user class 
$user= new User();


$id = $_GET['id'];
$user->remove($id);




?>