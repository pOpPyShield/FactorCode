<?php 

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($ModelName) {
        $path = "Model/";
        $extension = ".model.php";
        $fullpath = $path . $ModelName . $extension;

        include_once 'fullpath';
    }

?>