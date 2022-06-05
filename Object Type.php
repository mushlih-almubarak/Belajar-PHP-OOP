<?php
class HelloWorld
{
    public function cetak(/* Hanya menerima parameter yg berasal dari objek Value */Value $isi)
    {
        return $isi;
    }
}

class Value
{
    public $kata = 'Hello world';

    public function __construct()
    {
        return $this->kata;
    }

    public function __toString()
    {
        return $this->kata;
    }
}

$str = new Value();
$instansiasi = new HelloWorld();
echo $instansiasi->cetak($str);
