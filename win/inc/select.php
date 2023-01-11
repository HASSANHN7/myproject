<?php
$sql = 'SELECT * FROM userss ORDER BY RAND() LIMIT 1 ';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
