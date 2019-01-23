<?php
//include_once '../db/dbconnection.php';
require '../models/Database.php'; 

if (isset($_POST["name"]) && isset($_POST["title"])&& isset($_POST["text"])) { 

    $title = $_POST["title"];
    $name = $_POST["name"];
    $text = $_POST["text"];
    $id = $_POST["idname"];

    // if data updates
if ($id > 0) {
    
    // create new Db connection
    $conn = new Database();
    // prevents from sql injections
    $title = $conn->link->real_escape_string($title);
    $name = $conn->link->real_escape_string($name);
    $text = $conn->link->real_escape_string($text); 
    $sql = "UPDATE feedbacks SET title='$title', name='$name', text='$text' WHERE id=$id";
    
    //update selected data
    $conn->update($sql);
    
    $sql = "SELECT id, title, name, text, updated FROM feedbacks";
    
    //get actual data from db    
    $conn->select($sql);

    $conn->link->close();
    
    
} else {
    
     // create new Db connection
$conn = new Database();
    // prevents from sql injections
$title = $conn->link->real_escape_string($title);
$name = $conn->link->real_escape_string($name);
$text = $conn->link->real_escape_string($text);    
    
$sql = "INSERT INTO feedbacks (title, name, text) VALUES('$title', '$name' ,'$text')";
    
//insert new data to db    
$conn->insert($sql);

$sql = "SELECT id, title, name, text, updated FROM feedbacks";
    
//get actual data from db    
$conn->select($sql);

$conn->link->close();

    
//if ($conn->query($sql) === TRUE) {
//$id = $conn->insert_id;
//$data = "SELECT * FROM feedbacks WHERE id = '".$id."'"; 
//$data = "SELECT name FROM feedbacks";
//$date = $conn->query($data);
//$date_result = mysqli_fetch_row($date); 
//$date = date_create($date_result['date']); 
//$date = date_format($date, 'd-m-Y H:i:s'); 
    
}
}

?>