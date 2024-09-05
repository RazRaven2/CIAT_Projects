

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Debugging Challenge</title>
</head>
<body>
  <h1>Login Form</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" name="submit" value="Login">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = isset($_POST["username"]) ? $_POST["username"] : "";
      $password = isset($_POST["password"]) ? $_POST["password"] : "";

      // Check if username and password are set and not empty
      if (empty($username) || empty($password)) {
        echo "Please enter your username and password.";
      } else if ($username == "admin" && $password == "password123") {
        // Debugging output
        echo "Login successful.";
      } else {
        // Debugging output
        echo "Invalid username or password.";
      }
    }
  ?>
</body>
</html>
