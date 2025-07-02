<?php

require_once __DIR__ . '/config.php';
session_start();



if (isset($_SESSION['user_id']) && isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] <= 60)) {
    $_SESSION['last_activity'] = time();
    header('Location: admin.php');
    exit;
} else {
    header('Location: login.php');
    exit;
}
?>