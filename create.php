<?php

require_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = uniqid(rand(), true);
  $ext = end((explode(".", $_FILES['image']['name'])));
  $image = "images/{$name}.{$ext}";
  // $image = "images/{$_FILES['image']['name']}";
  if (move_uploaded_file($_FILES['image']['tmp_name'], $image) && $conn->query("INSERT INTO `practice_crud` (`name`, `image`) VALUES ('{$_POST['name']}', '{$image}');")) {
    header('location: ./');
  }
}

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
  <form action="create.php" enctype="multipart/form-data" method="post">
    <label>
      <span>Name: </span>
      <input name="name" type="text" />
    </label>
    <label>
      <span>Image: </span>
      <input name="image" type="file" />
    </label>
    <button type="submit">
      Submit
    </button>
  </form>
</body>

</html>