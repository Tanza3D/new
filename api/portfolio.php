<?php
include("database.php");

if(!isset($_GET['latest']))
{
    $posts = Database::execSimpleSelect("SELECT * FROM portfolio ORDER BY date DESC");
}
else{
    $posts = Database::execSimpleSelect("SELECT * FROM portfolio ORDER BY date DESC LIMIT 1");
}

// fix json
for($i = 0; $i < count($posts); $i++) {
    $posts[$i]["images"] = json_decode($posts[$i]["images"]);
}

header("Content-Type: application/json");
echo json_encode($posts);
?>