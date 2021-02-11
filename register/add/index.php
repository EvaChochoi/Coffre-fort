<?php include("../../config/bdd.php"); // On se connecte à la base

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_dest = '../../pics/image/'.$file_name;
$file_extension = strrchr($file_name, ".");
var_dump($_FILES);
move_uploaded_file($file_tmp, $file_dest);

$sql = "INSERT INTO users (id, email, username, password, image) VALUES (NULL, '$email', '$username', '$password','$file_name')";
$query = $pdo->prepare($sql);
$query->execute();

header('Location: ../../');
?>
