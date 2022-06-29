<?php
require_once 'App/init.php';

use App\Data\User as UserData;
use App\Manajemen\User as UserManage;

new UserData();
echo "<br>";
new UserManage();
