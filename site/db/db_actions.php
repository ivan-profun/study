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
    *         "name" => "",
    *         "type" => "",
    *         "lenght" => "",
    *         "action" => "",
    *         "isNull" => "",
    *         "autoIncrement" => ""
    *     ]
    * ]
    */
    public function createTable($table, $fields) {
        if (isset($table) && $table != "") {
            $sql = "CREATE TABLE IF NOT EXISTS " . $table;
            $sql .= "id INT AUTO_INCREMENT PRIMARY KEY";
            if ($fields) {

            }
            $sql .= ""




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