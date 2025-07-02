<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['last_activity']) || (time() - $_SESSION['last_activity'] > 60)) {
    header('Location: logout.php');
    exit;
}

$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Area</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>