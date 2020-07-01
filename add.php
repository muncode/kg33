<?php

require_once 'db.php';

if(!empty($_POST['task_text'])) {
    $text = $mysqli->real_escape_string($_POST['task_text']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $datetime = date('Y-m-d H:i:s');

    $mysqli->query("INSERT INTO kg33_tasks (task) VALUES ('$text')");
    $task_id = $mysqli->insert_id;
    $mysqli->query("INSERT INTO kg33_log (ip, datetime, task_id) VALUES ('$ip','$datetime','$task_id')");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
