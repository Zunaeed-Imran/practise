<?php

require_once('connect.php');

$result = $conn->query("SELECT * from `practice_crud`;");

$rows = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRUD</title>
</head>

<body>
  <a href="create.php">
    <button type="button">Create</button>
  </a>
  <table border="1">
    <thead>
      <tr>
        <th>
          ID
        </th>
        <th>
          Name
        </th>
        <th>
          Image
        </th>
        <th>
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($rows as $row) : ?>
        <tr>
          <th>
            <?= $row['id'] ?>
          </th>
          <th>
            <?= $row['name'] ?>
          </th>
          <th>
            <?php if (!empty($row['image'])) : ?>
              <img alt="<?= $row['name'] ?>" height="25" src="<?= $row['image'] ?>" />
            <?php endif ?>
          </th>
          <th>
            <a href="view.php?id=<?= $row['id'] ?>">
              <button type="button">
                View
              </button>
            </a>
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
          </th>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>

</html>