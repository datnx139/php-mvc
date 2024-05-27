<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="global.css"></link>
    <link rel="stylesheet" href="layout.css"></link>
  </head>
  <body>
    <div id="__app" class="php-mvc-layout">
      <?php require_once("./layouts/header.php"); ?>
      <div class="php-mvc-layout-content">
        <?php require_once("./layouts/menu.php"); ?>
        <?php require_once("./layouts/main.php"); ?>
      </div>
      <?php require_once("./layouts/footer.php"); ?>
    </div>
  </body>
</html>