<?php
require_once("db.php");
$id = $_GET["id"]; 
$db = new DB("localhost", "products", "products", "products");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo json_encode($db->query("SELECT * FROM products WHERE id =" . $id),JSON_UNESCAPED_SLASHES);
} else {
        http_response_code(405);
}
?>