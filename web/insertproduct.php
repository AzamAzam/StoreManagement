<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// get JSON data
$data = file_get_contents("php://input");
// convert json data to array
$json_data = json_decode($data, true);

$p_name = $_POST['p_name'];
$p_price = $_POST['p_price'];
$p_detail = $_POST['p_detail'];

$baseFromJavascript = $_POST['base64']; //your data in base64 'data:image/png....';
// We need to remove the "data:image/png;base64,"
$base_to_php = explode(',', $baseFromJavascript);
// the 2nd item in the base_to_php array contains the content of the image
$data = base64_decode($base_to_php[1]);

$imgName=time();
$filepath = "images/". $imgName . ".png";

// Save the image in a defined path
file_put_contents($filepath,$data);

$sql = "INSERT INTO products(p_name,p_price,p_detail,p_image) VALUES('$p_name','$p_price','$p_detail','$filepath')";

if($conn->query($sql) === TRUE){
  echo "success";
}else echo FALSE;

$conn->close();
?>