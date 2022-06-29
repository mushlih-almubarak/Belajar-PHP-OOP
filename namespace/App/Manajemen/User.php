<?php
// Agar bisa menggunakan nama class yang sama pada folder lain, gunakan namespace.
namespace App\Manajemen;
// Class User di file ini sekarang terlah berubah namanya menjadi class App\Manajemen\User (Karena menggunakan namespace). 

class User
{
    public function __construct()
    {
        echo 'Ini adalah class ' . __CLASS__;
    }
}
