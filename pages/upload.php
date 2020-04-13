<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0a80efeb65.js"></script>
    <title>Upload</title>
</head>

<body>
    <div class="my-3 container">
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Add PFE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile">How it works</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active show" id="home">
                        <div class="p-4 bg-light">
                            <h2><i class="fas fa-book mr-3" style="font-size: 22px"></i>Add Your PFE's </h2>
                            <p class="text-muted">Fill in the below form </p>
                            <form action="/upload-document" method="POST">
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">@</span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="exemple@exemple.com">

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">File <small>.pdf .word .wordx only</small></label>
                                    <div class="col-sm-10">
                                        <input type="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <input type="submit" class="btn btn-primary" value="UPLOAD">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile">
                        <div class="p-4 bg-light">
                            <p>
                                Your document will be upload to a <b>DROPBOX</b> account , and they will be archived there
                                after the upload process , you will recive an email contaning the document url
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
