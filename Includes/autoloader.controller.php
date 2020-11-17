<?php 

    spl_autoload_register('myAutoLoadConTrol');

    function myAutoLoadConTrol($ModelName) {
        $path = "./Controller/";
        $extension = ".php";
        $fullpath = $path . $ModelName . $extension;

        include_once 'fullpath';
    }

?>