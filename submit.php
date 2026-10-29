<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "contact");
mysqli_set_charset($conn, "utf8mb4");

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$contact = trim($_POST["contact"] ?? "");

if ($name === "" || $email === "" || $contact === "") {
    exit("Please fill in all fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("Please enter a valid email address.");
}

$sql = "INSERT INTO my_contacts (name, email, contact) VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $contact);
mysqli_stmt_execute($stmt);

header("Location: dashboard.php");
exit;