<?php    
    
    require_once './Core/Init.php';
    require_once './Core/Config.php';
    class Img {
        protected static $_instance = null;
        public $_pdo;
        public $_result;
        public $_imgName;
        public function __construct()
        {
            try {
                $this->_pdo = new PDO('mysql:host=' . Config::get('mysql/host'). ';dbname='.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getImgName() {
            return $this->_imgName;
        }
        public function getImgType() {
            return $this->_imgType;
        }
        public function getUserID() {
            return $this->_UserID;
        }
        public function checkImg($idUser) {
            $st = $this->_pdo->prepare("SELECT * FROM profileimg WHERE userId = $idUser");
            $st->execute();
            $this->_result = $st->fetch();
            $this->_imgType = $this->_result['Type'];
            $this->_imgName = $this->_result['Name'];
            if($this->_result['status'] == 0) {
                return true;
            }

            return false;
        }

        public function uploadImg($userID, $namesubmit) {
            $fileName = $_FILES['file']['name'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];
            $fileError = $_FILES['file']['error'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg' , 'jpeg' , 'png');
            if(in_array($fileActualExt, $allowed)) {
                if($fileError == 0) {
                    if($fileSize<100000) {
                        $fileNameNew = "profile". $userID .$fileExt[0]."." .$fileActualExt;
                        $fileDestination = 'uploads/'.$fileNameNew; 
                        print_r($fileDestination);
                        move_uploaded_file($fileTmpName, $fileDestination);
                        // Set status
                        $stat = 0;
                        $imgNam1 = $fileExt[0];
                        $usrID = $userID;
                        $st = $this->_pdo->prepare('UPDATE profileimg SET Name = ?, status = ? ,Type = ? WHERE userId = ?');
                        $st->bindParam(1, $imgNam1);
                        $st->bindParam(2, $stat);
                        $st->bindParam(3, $fileActualExt);
                        $st->bindParam(4, $usrID);
                        $st->execute();
                        return true;
                    }
                    else {
                        return false;
                    }
                }
            }
        }
    }
?>