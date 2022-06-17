<?php
class Kendaraan
{
    public $jenis;
    public $tahun = 2020;

    public function __construct()
    {
        return $this->jenis = "Mobil";
    }

    public function hello($nama)
    {
        return "Hello $nama!";
    }
}

// Inheritance membuat class turunannya (child class) bisa menggunakan property dan method di class parentnya, jika method/property tersebut sudah ada di childnya, maka itu yang akan digunakan, jika tidak ada maka ia akan mengambil yang dari parentnya.

// Gunakan keyword "extends 'namaClass'" untuk menunjukkan bahwa itu adalah class child dari class 'namaClass'

class Mobil extends Kendaraan
{
    public $tahun = 2022;
    public function cetak()
    {
        return 'Jenis: ' . $this->jenis . '<br>Tahun: ' . $this->tahun;
    }
}

$obj = new Mobil();
echo $obj->cetak();
echo '<hr>';
echo $obj->hello('Mushlih');
