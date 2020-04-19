<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Home : index</title>
  </head>
  <body>
    <?php echo $this->fetch('/includes/nav.inc.php', []) ?>
    <div class="container">
      <h1>Home Page</h1>
      <p>index action</p>
      <a href="/upload">upload a document</a>
    </div>
  </body>
</html>
