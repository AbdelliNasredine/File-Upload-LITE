<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Home</title>
  </head>

  <body>
    <!-- form to upload files -->
    <form class="uploadform" method="post" action="/upload">
      <input class="input-file" type="file" name="" id="" />
      <input class="input-btn" type="submit" />
    </form>
    <?php foreach ($files as $file): ?>
      <h3>File Name: <?=$file['name']?> </h3>
      <p>File size: <?=$file['size']?> </p>
      <p>  </p>
      <img src="<?=$file['url']?>" alt="">
    <?php endforeach;?>
  </body>
</html>
