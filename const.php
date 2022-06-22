<?php
// Constant adalah 'seperti variabel' namun ia tidak bisa diubah isinya
define('NAMA', 'Mushlih');
echo NAMA;
echo "<br>";

const UMUR = 17;
echo UMUR;
echo "<br>";

// Beberapa constant (magic constant) yang sudah dibuatkan oleh PHP
echo __LINE__; // Menunjukkan sedang dibaris berapa
echo "<br>";
echo __FILE__; // Menunjukkan sedang di file apa
echo "<br>";
echo __DIR__; // Menunjukkan sedang di direktori yang mana
echo "<br>";

function coba()
{
    return __FUNCTION__; // Menunjukkan sedang berada di function apa
};
echo coba();
echo "<br>";

class Tes
{
    public static $kelas = __CLASS__; // Menunjukkan sedang berada di class apa
}
echo Tes::$kelas;
echo "<br>";

class Coba
{
    const ALAMAT = 'Bumi';
}
echo Coba::ALAMAT;
echo "<br>";

class Coba2
{
    define('PEKERJAAN', 'Siswa'); // define(); tidak bisa dibuat di dalam class (tapi masih bisa mengakses yang telah dibuat dari luar), sedangkan 'const' bisa
}
