<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <title>Home</title>
  </head>

  <body>
    <!-- container -->
    <div class="container">
      <!-- files display -->
      <div class="files">
        <?php foreach ($files as $file): ?>
          <div class="file">
            <img class="file-img" src="<?=$file['url']?>"/>
            <div class="file-text">
              <h3 class="file-name">
                <?=$file['name']?>
              </h3>
              <p class="file-description">
                <?=$file['size']?>
              </p>
            </div>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </body>
</html>
