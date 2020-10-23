<?php
session_start();
unset($_SESSION['userid']);
header('location:/ghassen/login.html');
?>