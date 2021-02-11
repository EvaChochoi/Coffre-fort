<?php include("../config/bdd.php"); // On se connecte à la base
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$query = $pdo->prepare($sql);
$query->execute();

while($line = $query->fetch()) {
    if ($password === $line['password']){
        $_SESSION['id'] = $line['id'];
        $_SESSION['image'] = $line['image'];
        $_SESSION['username'] = $line['username'];
    }
header('Location: ../');
}


?>
