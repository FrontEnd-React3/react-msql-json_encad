<!-- if (isset($_SERVER['HTTP_ORIGIN'])) { 
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); 
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
} -->


<?php
include "includes/database.php";

?>


<?php 
include_once("core.php");
$getcontacts = mysqli_query($con,"SELECT * FROM contacts");
$json_array = array();
while ($contacts=mysqli_fetch_array($getcontacts)) {
$json_array[]=$contacts;

// 	$id = $contacts['id'];
// 	$name = $contacts['name'];
// 	$phone = $contacts['phone'];
// 	$email = $contacts['email'];
// 	$address = $contacts['address'];
// echo "<tr>";
// echo "<td>".$name."</td><td>".$phone."</td><td>".$email."</td><td>".$address."</td><td><a href='delete.php?id=$id'>delete</a></td><td><a href='edit.php?id=$id'>edit</a></td>";
// echo "</tr>";
}echo json_encode($json_array);

?>

