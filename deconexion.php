<?php
session_start();
session_unset();
//add
session_destroy();
header("location:Authentification/authentification.php");
?>