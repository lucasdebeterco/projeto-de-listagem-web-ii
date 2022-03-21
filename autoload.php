<?php
spl_autoload_register(function($className) {
    $file = 'libs/' . $className . '.class.php';
    if (file_exists($file)) {
        require_once $file;
    }
});