<?php
$servername = "localhost";
$username = "root";
$password = "2611td2611td";
$dbname = "test_index";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$msc = microtime(true);


			$sql = "Select * from data with(index(test)) where a >= 500";
		if ($conn->query($sql) === TRUE) {
		    //echo "New record created successfully";
		} else {
		   // echo "Error: " . $sql . "<br>" . $conn->error;
		}

$msc = microtime(true)-$msc;

echo $msc;


function random($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
