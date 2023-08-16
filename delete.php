<?php

require_once('connect.php');

if ($conn->query("DELETE FROM `practice_crud` WHERE `id` = {$_GET['id']};")) {
  header('location: ./');
}