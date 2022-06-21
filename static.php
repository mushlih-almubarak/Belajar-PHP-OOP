<?php
class Coba
{
    public static $nama;

    public function setNama()
    {
        self::$nama = 'Mushlih';
        return self::$nama;
    }

    public static function setNamaLengkap()
    {
        self::$nama = 'Mushlih Almubarak';
        return self::$nama;
    }
}

// Keyword 'static' memungkin agar property/method yang ada di dalam class bisa diakses langsung tanpa harus diinstansiasi 
Coba::setNamaLengkap();
echo Coba::$nama;

echo "<br>";

// Kita masih bisa menginstansiai classnya agar method/property yang bukan 'static' masih bisa diakses
$obj = new Coba();
echo $obj->setNama();
