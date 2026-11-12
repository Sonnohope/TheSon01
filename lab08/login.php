<?php
$pageTitle = 'Lab 08 - Login';
include 'header.inc';
?>
  <h1>Login</h1>
  <form method="post" action="process.php">
    <p>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </p>
    <!-- Token = first initial + student ID -->
    <input type="hidden" name="token" value="TSWS01870">
    <p>
      <input type="submit" value="Login">
    </p>
  </form>
<?php include 'footer.inc'; ?>
