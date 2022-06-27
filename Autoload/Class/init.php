<?php

// Parameter $class berisi nama-nama class yang diambil oleh function tersebut
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});

// Kode diatas sama dengan:
// require_once 'Nama.php';
// require_once 'Alamat.php';
// require_once 'Pekerjaan.php';