<?php
// Interface (mirip class abstrak) adalah class yang hanya boleh memiliki method yang harus dimplementasikan di semua class turunannya
// Interface tidak boleh ada property, hanya boleh ada method saja
// Semua visibility method di interface harus 'public'

interface Kendaraan
{
    public function setJenis();
    public function getJenis();
}

class Mobil implements Kendaraan
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

class Motor implements Kendaraan
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
