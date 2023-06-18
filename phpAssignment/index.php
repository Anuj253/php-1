<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscriber Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1 class="logo">Subscriber Portal</h1>

      <?php
      include("connection.php");
      ?>

      <?php
      include("global_header.php");
      ?>
     
    </div>
  </header>
  <main>
    <div class="container">
      <h2>Enter Your Information</h2>
      <form class="subscriber-form" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="interests">Interests:</label>
          <textarea id="interests" name="interests" required></textarea>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" id="age" name="age" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="country">Country:</label>
          <select id="country" name="country">
            <option value="">Select a country</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AR">Argentina</option>
            <option value="AU">Australia</option>
            <option value="BR">Brazil</option>
            <option value="CA">Canada</option>
            <option value="CN">China</option>
            <option value="EG">Egypt</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
            <option value="IN">India</option>
            <option value="IT">Italy</option>
            <option value="JP">Japan</option>
            <option value="MX">Mexico</option>
            <option value="RU">Russia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
          </select>
        </div>
        <button class="center-button" type="submit" name="submit">Submit</button>
      </form>
      <a href="view.php" class="view-button">View Database</a>
    </div>
  </main>
  <footer>
    <p>@Anuj 2023 Subscriber Portal. All rights reserved.</p>
  </footer>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $interests = $_POST['interests'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $database->create($name, $email, $interests, $age, $gender, $country);
}
?>
