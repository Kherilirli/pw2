<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Username : <?= $username; ?></p>
    <p>Password : <?= $password; ?></p>
</body>
</html>