<?php

  include 'data.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Google faq</title>
  </head>
  <body>

    <main>
      <?php
        foreach ($data as $value) {
      ?>

      <h2><?php echo $value["domanda"] ?></h2>
      <p><?php echo $value["risposta"] ?></p>

      <?php
        }
      ?>
    </main>

  </body>
</html>
