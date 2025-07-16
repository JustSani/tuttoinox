<?php
class Database {
    private $pdo;
    private $stmt;

    public function __construct($host, $dbname, $user, $pass, $charset = 'utf8mb4') {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Errori come eccezioni
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Array associativi
            PDO::ATTR_EMULATE_PREPARES   => false,                  // Query reali (sicurezza)
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new RuntimeException("Connessione fallita: " . $e->getMessage());
        }
    }

    public function query($sql, $params = []) {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($params);
        return $this->stmt;
    }

    public function fetchAll($sql, $params = []) {
        return $this->query($sql, $params)->fetchAll();
    }

    public function fetchOne($sql, $params = []) {
        return $this->query($sql, $params)->fetch();
    }

    public function execute($sql, $params = []) {
        return $this->query($sql, $params)->rowCount();
    }

    public function lastInsertId() {
        return $this->pdo->lastInsertId();
    }
}
?>