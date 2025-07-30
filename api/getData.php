<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

$id = $_POST['id'] ?? 'Sconosciuto';

require_once '../liberia.php';

$db = new Database('localhost', 'my_sanino', 'root', '');


$card = $db->fetchOne("SELECT * FROM tuttoinox WHERE id = ?", [$id]);

echo json_encode($card);

?>