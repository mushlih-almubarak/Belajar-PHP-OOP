<?php
class Coba
{
    // Method (function) di OOP PHP
    public function halo($nama)
    {
        return "Halo $nama";
    }
}

$coba = new Coba();
// Menjalankan methodnya
echo $coba->halo('Mushlih');
