<?php
// 'private' membuat property atau method tersebut hanya bisa diakses di class itu sendiri
class Coba
{
    private $nama;

    public function __construct()
    {
        $this->nama = 'Mushlih';
    }

    public function ambilNama()
    {
        return "Hello $this->nama";
    }
}

class Nama extends Coba
{
    public function getNama()
    {
        return "Hello $this->nama"; // Error, ia tidak bisa mengambil property $nama dari sini karna propertynya 'private'
    }
}

$coba = new Coba();
$nama = new Nama();
echo $coba->ambilNama();
echo $nama->getNama();
