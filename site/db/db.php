<?
class DB {
    private $db; 
    private $logFile;
    
    private function __construct() {
        $host = getenv('DB_CONTAINER_NAME');;
        $db_name = getenv('MYSQL_DATABASE');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');

        $this->logFile = '../logs/db.log';

        try {
            $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8";
            $this->db = new PDO($dsn, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->log("Подключение к базе данных успешно");
        } catch (PDOException $e) {
            $this->log("Ошибка подключения: " . $e->getMessage());
            die("Ошибка подключения: " . $e->getMessage());
        }
    }

    private function __destruct() {
        $this->db = null;
    }

    private function log($message) {
        $time = date('Y-m-d H:i:s');
        file_put_contents($this->logFile, "[$time] $message\n", FILE_APPEND);
    }
}
?>