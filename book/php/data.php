
<?php
    class Database {
        private $host = "localhost"; // tên host mysql cần kết nối
        private $dbName = "databook"; // tên cơ sở dữ liệu
        private $username = "root";  // username 
        private $password = "";      // mật khẩu
        public $connection;

        public function getConnection(){
            $this->connection = null;
            try{
                $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}",$this->username, $this->password);
            }catch(PDOException $ex){
                die("Connection error {$ex->getMessage()}");
            }
            return $this->connection;
        }
    }
    $db = new Database();
    $dbConnection = $db->getConnection() ;
?>
