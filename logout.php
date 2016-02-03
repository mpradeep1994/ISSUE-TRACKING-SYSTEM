<?php
session_start();
unset($_SESSION['username']);
session_destroy();
include('dir.php');
header('Location:'.$root.'/index.php');
?>