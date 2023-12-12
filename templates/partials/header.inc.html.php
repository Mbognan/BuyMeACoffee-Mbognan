<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
</head>
<body>
  <?php include 'messages.inc.html.php' ?>
  <?php if(!empty($isUserLogin) && $isUserLogin === true): ?>
  <?php include 'user_menu.inc.html.php' ?>
  <?php endif; ?>