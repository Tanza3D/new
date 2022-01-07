<?php
include("database.php");

if(!isset($_GET['latest']))
{
    $posts = Database::execSimpleSelect("SELECT * FROM projects ORDER BY importance");
}
else{
    $posts = Database::execSimpleSelect("SELECT * FROM projects ORDER BY importance LIMIT 1");
}

header("Content-Type: application/json");
echo json_encode($posts);
?>