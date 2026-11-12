<?php
session_start();

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username === 'THESON' && $password === 'SWS01870') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
}

$pageTitle = 'Lab 08 - Login Failed';
include 'header.inc';
?>
  <p>Invalid login. <a href="login.php">Try again</a></p>
<?php include 'footer.inc'; ?>
