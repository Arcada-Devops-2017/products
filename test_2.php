<?php
require_once("db.php");
$db = new DB("localhost", "products", "products", "products");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
		$objectID = $_GET['id']);
        echo json_encode($db->query("SELECT * FROM products WHERE id = 1"));
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "POST";
} else {
        http_response_code(405);
}
?>
