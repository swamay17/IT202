<?php
include 'connection.php';
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$register = $mysqli->query("INSERT INTO project1 (username, password, ) VALUES ('$username', '$password')");
if ($register) {
header("Location: registration.php?register_action=success");
} else {
echo $mysqli->error;
}
}
?>