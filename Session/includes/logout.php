<?php 
include_once 'session.php';

$userSession = new UserSession();
$userSession -> closeSession();

header ('location:../index.php');
