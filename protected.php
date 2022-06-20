<?php
// 'protected' membuat property atau method tersebut hanya bisa diakses di class itu sendiri dan juga turunannya
class Coba
{
    protected $nama;

    public function __construct()
    {
        $this->nama = 'Mushlih';
    }
}

class Nama extends Coba
{
    public function getNama()
    {
        return "Hello $this->nama";
    }
}

$obj = new Nama();
echo $obj->getNama();
echo "<br>";
$obj->nama = 'Mushlih Almubarak'; // Error, ia tidak bisa diubah dari sini karna propertynya 'protected'
