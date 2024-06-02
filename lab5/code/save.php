<?php
function redirectToHome(): void
{
    header('Location: index.php');
    exit();
}

if (!isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];

$mysqli = new mysqli("localhost", "root", "helloworld", "web");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$stmt = $mysqli->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $title, $desc, $category);

if ($stmt->execute()) {
    $stmt->close();
    $mysqli->close();
    redirectToHome();
} else {
    $stmt->close();
    $mysqli->close();
    throw new Exception('Something went wrong.');
}
?>