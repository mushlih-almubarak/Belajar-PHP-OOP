<?php
// Abstrak adalah cara agar class tersebut tidak dapat diinstansiasi
abstract class Kendaraan
{
    public $jenis;
    // Method dibawah tidak bisa diisi di sini, dan harus dibuat di semua class turunannya
    abstract public function setJenis();
}

class Mobil extends Kendaraan
{
    public function setJenis()
    {
        $this->jenis = 'Mobil';
    }

    public function getJenis()
    {
        return "Jenis = $this->jenis";
    }
}

class Motor extends Kendaraan
{
    public function setJenis()
    {
        $this->jenis = 'Motor';
    }

    public function getJenis()
    {
        return "Jenis = $this->jenis";
    }
}

$mobil = new Mobil();
$mobil->setJenis();
echo $mobil->getJenis();

echo "<br>";

$motor = new Motor();
$motor->setJenis();
echo $motor->getJenis();
