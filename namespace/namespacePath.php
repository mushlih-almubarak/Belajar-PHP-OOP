<?php
require_once 'App/init.php';

// Memanggil class yang menggunakan namespace
$userData = new App\Data\User();
$userData;

echo "<br>";
$userManage = new App\Manajemen\User();
$userManage;