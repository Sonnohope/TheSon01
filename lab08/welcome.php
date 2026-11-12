<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$pageTitle = 'Lab 08 - Welcome';
include 'header.inc';
?>
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
  <p>You have logged in successfully.</p>
<?php include 'footer.inc'; ?>
