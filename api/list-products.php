<?php
$sort = $_GET[“sort”];
require_once("db.php");
$db = new DB("localhost", "products", "products", "products");
if ($_SERVER['REQUEST_METHOD'] == "GET") {
	if ($sort != null){
echo “1”;
		echo json_encode($db->query("SELECT * FROM products ORDER BY " .$sort),JSON_UNESCAPED_SLASHES);
	}
	else {
        	echo json_encode($db->query("SELECT * FROM products"),JSON_UNESCAPED_SLASHES);
	}
} else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "POST";
} else {
        http_response_code(405);
}
?>