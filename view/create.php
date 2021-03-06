<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../public/css/style.css">
  <link rel="stylesheet" href="../public/css/forms.css">
  <link rel="stylesheet" href="../public/css/navigation.css">
  <title>Game Portal</title>
</head>

<body>
<?php
require_once "../lib/verifySession.php";
include_once '../view/navbar.php';
?>
  <div class="wrapper w-orange">
    <h1>Create</h1>
    <form action="../lib/upload.php" method="post" class="edit-form" enctype="multipart/form-data">
      <section class="form-group">
        <label for="game-title">Title:</label>
        <input class="form-control f-orange" type="text" name="game-title" id="game-title" required />
        <label for="game-publisher">Publisher:</label>
        <input class="form-control f-orange" type="text" name="game-publisher" id="game-publisher" required />
        <label for="fileToUpload">Picture:</label>
        <input class="form-control f-orange" type="file" name="fileToUpload" id="fileToUpload" required />
      </section>

      <div class="form-group">
        <a class="button-link orange-cancel-button" href="../public/index.php">Cancel</a>
        <button class="orange-submit-button" type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>