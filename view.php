<?php

require_once('connect.php');

$result = $conn->query("SELECT * from `practice_crud` WHERE `id` = {$_GET['id']} LIMIT 1;");

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD</title>
</head>

<body>
  <a href="./">
    <button type="button">Back</button>
  </a>
  <p>
    ID: <?= $row['id'] ?>
  </p>
  <p>
    Name: <?= $row['name'] ?>
  </p>
  <?php if (!empty($row['image'])) : ?>
    <div>
      Image: <img alt="<?= $row['name'] ?>" height="200" src="<?= $row['image'] ?>" />
    </div>
  <?php endif ?>
  <div>
    <a href="edit.php?id=<?= $row['id'] ?>">
      <button type="button">
        Edit
      </button>
    </a>
    <a href="delete.php?id=<?= $row['id'] ?>">
      <button type="button">
        Delete
      </button>
    </a>
  </div>
</body>

</html>