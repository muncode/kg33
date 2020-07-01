<?php

$query = "SELECT * FROM kg33_tasks ORDER by id DESC";

if ($result = $mysqli->query($query)) {
    foreach($result as $row){
        echo "<form id='task_delete' action='' method='get'><div class='task'>"
            . htmlentities($row['task']) . "</div><input type='hidden' name='task_id' value="
            . $row['id'] . " /><input type='submit' value='x'/></form>";
    }
}