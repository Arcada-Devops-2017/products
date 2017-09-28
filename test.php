<?php
require_once("db.php");
echo (1);
$db = new DB("localhost", "products", "products", "products");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
		echo (2);
        echo json_encode($db->query("SELECT * FROM products"));
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "POST";
		echo (3);
} else {
        http_response_code(405);
		echo (4);
}
?>