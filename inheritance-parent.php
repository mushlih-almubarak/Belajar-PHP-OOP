<?php

class Sapaan
{
    public function hello()
    {
        return 'Hello world!';
    }
}

class Nama extends Sapaan
{
    public function hello()
    {
        return 'Hello Mushlih!';
    }

    public function __construct()
    {
        echo parent::hello(); // Ini akan menjalankan method hello() yang ada di class parentnya, dan bukan di class child itu sendiri
    }
}

$obj = new Nama();
$obj;
