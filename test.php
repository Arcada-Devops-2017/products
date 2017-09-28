<?php
header('Content-Type: application/json; charset=utf-8');
require_once("db.php");
$db = new DB("localhost", "products", "products", "products");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo json_encode($db->query("SELECT * FROM products"));
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "POST";
} else {
        http_response_code(405);
}
?>