<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0a80efeb65.js"></script>
    <?php require './pages/inc/css.inc.php'  ?>
    <style>
        * {
            font-family: 'Rubik', sans-serif;
        }

        .fas {
            font-size: 18px;
        }

        .bg-blue {
            background-color: #456880 !important;
        }

        .nav-link {
            padding: 16px 16px;
            margin-right: 16px;
        }
    </style>
    <title>Home</title>
</head>

<body>
    <?php require './pages/inc/navigation.inc.php'  ?>
    <div class="my-3 container">
        <div class="jumbotron">
            <h1 class="display-3">Hello, Students!</h1>
            <p class="lead">
                I wish that you have a geate day ,
            </p>
            <hr class="my-4">
            <p>
                This site is made for you to upload your PFE's document , in order to help other students in the future
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/upload-document" role="button">UPLOAD YOUR DOCUMENT NOW !</a>
            </p>
        </div>
    </div>
    <?php require './pages/inc/javascript.inc.php'  ?>
</body>

</html>