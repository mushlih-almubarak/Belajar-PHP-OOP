<?php
class Produk
{
    public $judul = 'Bumi';
}

// Menginstansiasi classnya
$produk1 = new Produk();
// Mengakses property yang ada di classnya
echo $produk1->judul;
echo '<br>';
// Merubah isi propertynya
$produk1->judul = 'Bulan';
echo $produk1->judul;
