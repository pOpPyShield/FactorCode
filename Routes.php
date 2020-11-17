<?php
    require_once './Controller/Route.php';
    Route::set('index.php', function() {
        echo 'index';
    });

    Route::set('contactus.php', function() {
        echo 'aboutus';
    });

?>