<?php

require_once 'db.php';

if(!empty($_GET['task_id'])) {
    $id = $_GET['task_id'];
    $mysqli->query("DELETE FROM kg33_tasks WHERE id='$id'");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
