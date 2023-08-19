<?php
include 'connect.php';

if($conn->query("DELETE from `practice_crud` where `id` = {$_GET['id']}"))
?>