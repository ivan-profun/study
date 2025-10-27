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

    /* Tables actions start */
    public function createTable($table_name, $fields) {
        $sql = "CREATE TABLE IF NOT EXISTS " . $table_name;
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100),
                email VARCHAR(100)
            )
        ";
        $this->db->exec($sql);
        $this->log("Создана таблица users");
    }
    /* Tables actions end */

    /* Fields actions start */
    public function insert($name, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $this->log("Добавлен пользователь: $name, $email");
    }

    public function get($table, $fields) {
        $stmt = $this->db->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->log("Получены " . count($users) . " пользователей");
        return $users;
    }
    /* Fields actions end */
}
?>