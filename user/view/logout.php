<?php
session_start();
if (isset($_SESSION['user'])) {
	unset($_SESSION['user']);
	header("location:../../index.php");
} elseif (isset($_SESSION['admin'])) {
	unset($_SESSION['admin']);
	header("location:../../index.php");
}
?>