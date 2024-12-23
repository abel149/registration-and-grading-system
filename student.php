<?php
session_start();

if (isset($_SESSION['role'])) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->


    <title>student</title>

  </head>

  <body>
    <h1>students</h1>
  </body>

  </html>

<?php } ?>