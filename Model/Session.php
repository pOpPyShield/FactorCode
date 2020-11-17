<?php 
    session_start();
    class Session{
        public function setUserName($UserName) {
            $_SESSION['UserName'] = $UserName;
        }

        public function setId($id) {
            $_SESSION['id'] = $id;
        }
        
    }

?>