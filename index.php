
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHPMailer</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-light rounded">
                <h1 class="text-center font-weght-bold text-primary">Contact Us</h1>
                <hr class="bg-light">
                <?php
                    '<h5 class="text-center text-success"><?php echo $result;?></h5>'
                ?>  
                    <form action="senMail.php" method="post" id="form-box" class="p-2">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <input type="text" name="name" class="form-control" placeholder="Enter youre name....">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <input type="text" name="email" class="form-control" placeholder="Enter youre email....">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <input type="text" name="subject" class="form-control" placeholder="Enter youre subject....">
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                                <textarea name="msg" class="form-control"  id="msg" cols="30" rows="4" placeholder="Write youre message..."></textarea>
                        </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
                            </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>