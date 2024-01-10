<?php
session_start();
/*  Clears ALL $_SESSION[...] variables */
$_SESSION = array();
header('Location: index.php');
?>