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
      <h1>File upload</h1>
      <p>select the file to upload it into dropbox</p>
      <form class="form" method="POST" action="/upload" enctype="multipart/form-data">
        <input class="form__file" type="file" id="file" name="file" />
        <label for="file">Choose a file</label>
        <input class="form__submit" type="submit" />
      </form>
    </div>
    <script src="js/script.js"></script>
  </body>
</html>
