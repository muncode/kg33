<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <title>kg33</title>
</head>
<body>
<header>
</header>
<div class="container">
    <form id="task_create" action="" method="post">
        <textarea name="task_text" placeholder="What to do?" autofocus required></textarea>
        <input type="submit" value="+">
    </form>
    <?php
    require_once 'content.php';
    ?>
</div>
</body>
</html>