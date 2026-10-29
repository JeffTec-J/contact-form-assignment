<?php
$conn = mysqli_connect("localhost", "root", "", "contact");
mysqli_set_charset($conn, "utf8mb4");

$result = mysqli_query(
    $conn,
    "SELECT id, name, email, contact FROM my_contacts ORDER BY id"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Dashboard</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid black;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: lightgray;
    }
  </style>
</head>
<body>
  <h1>Contact Dashboard</h1>

  <a href="index.php">Add a contact</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Contact</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo (int) $row["id"]; ?></td>
        <td><?php echo htmlspecialchars($row["name"], ENT_QUOTES, "UTF-8"); ?></td>
        <td><?php echo htmlspecialchars($row["email"], ENT_QUOTES, "UTF-8"); ?></td>
        <td><?php echo htmlspecialchars($row["contact"], ENT_QUOTES, "UTF-8"); ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>