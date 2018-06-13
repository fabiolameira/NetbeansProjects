<?php

session_start();

unset($_SESSION['username']);
unset($_SESSION['id']);
session_destroy();

include 'index.php';
?>