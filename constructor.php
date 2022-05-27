<?php
class Coba
{
    // Constructor (method yg dijalanakan otomatis ketika menginstansiasi classnya)
    public function __construct($nama)
    {
        echo "Halo $nama";
    }
}

// Parameter di constructor dikirimkan saat menginstansiasi classnya
$coba = new Coba('Mushlih');
