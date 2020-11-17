<?php 

    $act = isset($_GET['action']) ? $_GET['action'] : "home";

    switch ($act) {
        case "home": 
            require_once './index.php';
            break;
    }
 
?>