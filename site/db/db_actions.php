<?
require_once "db.php";

class DBActions {
    /* Tables actions start */
    /* 
    * Table rules
    * $table = [
    *     "name" => "<table_name>",
    *     "type" => "<table_type>",
    *     "mode" => "<matching_mode>"
    * ]
    * 
    * Fields rules
    * $fields = [
    *     [
    *         "name" => "<field_name>",
    *         "type" => "<value_type>",
    *         "lenght" => "<value_lenght>",
    *         "action" => "<field_action>", // int value mode { , unsigned, zerofill, unsigned zerofill}, date { , CURRENT_TIMESTAMP}, string {<matching_mode>}, foreign keys when erased { , RESTRICT, NO ACTION, CASCADE, SET NULL, SET DEFAULT}
    *         "isNull" => "<isNullable>", // {true, false}
    *         "isAutoIncrement" => "isAutoIncrement"
    *     ]
    * ]
    */
    public function createTable($table, $fields) {
        $message = "";
        if (isset($table)) {
            
        }   
        else {
            $message .= "Ошибка. Не установлена переменная table.\n";
        } 
        
        return $message;    
        if (!is_array($table)) {
            $message .= "Неверный формат переменной table.\n";
        }



        if () {
            if (isset())
            $sql = "CREATE TABLE IF NOT EXISTS `" . $table["name"] . "` ";
            if (isset($fields)) {
                if (is_array($fields)) {
                    
                }
            }
            if (!isset($fields[""])) {
                
            }


            $sql .= "`id` INT AUTO_INCREMENT PRIMARY KEY";
            if ($fields) {

            }
            $sql .= ""




            $sql = "
                CREATE TABLE `test` (
                    `id` int unsigned zerofill NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    `test` varchar(30) COLLATE 'utf8mb4_0900_ai_ci' NULL
                ) ENGINE='InnoDB' COLLATE 'utf8mb4_0900_ai_ci';
            ";
            $this->db->exec($sql);
            $this->log("Создана таблица users");
        }
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