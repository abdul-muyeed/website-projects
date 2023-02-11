<?php
session_start();
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_info";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$sms =$_POST['sms'];

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die( mysqli_connect_error());

}


// Sql query to be executed
$sql = "INSERT INTO `information` (`ID`, `name`, `order number`, `phone`, `mail`, `size`, `quantity`, `full cost`, `product name`, `payment method`, `discount used`, `address`, `Time`) VALUES (NULL, 'muyeed', '45243', '435145', 'wieyfboe', 'X', '12', '13123.45', 'ceowuepivu ufewgfwoe wo fow', 'divwbeu', 'ljvnwr', 'mv kwkjebi', current_timestamp());";
$result = mysqli_query($conn, $sql);

$conn->close();
header('Location: http://localhost/Website-2/index2.html?submit=successful');

?>

