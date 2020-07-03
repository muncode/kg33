<?php

require_once 'db.php';

if(!empty($_POST['task_id'])) {
    $id = $_POST['task_id'];
    $mysqli->multi_query("DELETE FROM kg33_tasks WHERE id='$id'; DELETE FROM kg33_log WHERE task_id='$id'");
    echo json_encode(array('success' => 1));
} else {
    echo json_encode(array('success' => 0));
}
