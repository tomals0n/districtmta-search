<?php

@include '../../conf/connect.php';

session_start();
session_unset();
session_destroy();

header('location:uid_find.php');

?>
