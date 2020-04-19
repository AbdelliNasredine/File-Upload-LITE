<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Upload : index</title>
  </head>
  <body>
    <?php echo $this->fetch('/includes/nav.inc.php', []) ?>
    <div class="container">
      <h1>Welcome</h1>
      <form method="POST" action="/upload" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" />
      </form>
    </div>
  </body>
</html>
