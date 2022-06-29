<?php
spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class =  end($class);
    $sources = ["App/Data/$class.php", "App/Manajemen/$class.php"];

    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});
