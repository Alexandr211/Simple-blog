<?php
require '../models/Database.php'; 

if (isset($_POST['message'])) { 
$id = $_POST['message'];
    // create new Db connection
$conn = new Database();
//delete data from db
$sql = "DELETE FROM feedbacks WHERE id = $id";
$conn->delete($sql);
//get actual data from db    
$sql = "SELECT id, title, name, text, updated FROM feedbacks";
    
//get actual data from db    
$conn->select($sql);

$conn->link->close();
    
}

?>