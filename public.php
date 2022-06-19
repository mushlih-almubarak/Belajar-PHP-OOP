<?php
// 'public' membuat property atau method tersebut bisa diakses dimanapun
class Coba
{
    public $nama;

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
$obj->nama = 'Mushlih Almubarak';
echo $obj->getNama();
