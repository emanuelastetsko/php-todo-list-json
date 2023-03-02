<?php 

$toDoListString = file_get_contents("./database.json");
$todoListDecoded = json_decode($todoListString, true);

$newTask = [
    "task" => $_POST["task"]["task"],
    "completed" => $_POST["task"]["completed"] == "true" ? true : false
];

$todoListDecoded[] = $newTask;

$todoListEncoded = json_encode($todoListDecoded);

file_put_contents("./database.json", $todoListEncoded);

header("Content-Type: application/json");

$response = [
    "success" => true,
    "code" => 200,
    "message" => "Ok",
    "todos" => $todoListDecoded
];

echo json_encode($response);