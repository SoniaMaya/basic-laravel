<?php
// mengganti penggunaan require dengan namespace
spl_autoload_register(function ($class) {
    // konversi namespace menjadi alamat file
    $file = str_replace('\\', '/', $class) . '.php';
    
    // mencari apakah nama file ada dan melakukan require file tersebut
    if (file_exists($file)) {
        require $file;
    }
});