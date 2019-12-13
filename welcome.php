<?php
include 'config1.php';
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$register = $mysqli->query("INSERT INTO project1(username, password, full_name) VALUES ('$username', '". md5($password)."', '$name')");
if ($register) {
header("Location: registration.php?register_action=success");
} else {
echo $mysqli->error;
}
}
?>