<?php
require '../models/Database.php'; 

if (isset($_POST['message'])) { 

    // create new Db connection
$conn = new Database();
//get actual data from db
$sql = "SELECT id, title, name, text, updated FROM feedbacks";
$conn->select($sql);

$conn->link->close();
    
}

?>