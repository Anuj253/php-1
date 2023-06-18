<?php
include("connection.php");

$database = new Db_connection();
$res = $database->read();

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal - View</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Subscriber Portal - View</h1>
      <?php include("global_header.php"); ?>
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Subscriber List</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Interests</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($res && mysqli_num_rows($res) > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
                  echo "<td>" . $row['email'] . "</td>";
                  echo "<td>" . $row['interests'] . "</td>";
                  echo "<td>" . $row['age'] . "</td>";
                  echo "<td>" . $row['gender'] . "</td>";
                  echo "<td>" . $row['country'] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='7'>No subscribers found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
  <footer>
    <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
  </footer>
</body>
</html>
