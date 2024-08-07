<?php include("/xampp/htdocs/php/project/mypic/includs/ckloginpage.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form ">
        <form method="post" class="p-3 mb-2 bg-dark text-white">
            
            <!-- <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div> -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="#" class="logo">
                        <img src="logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password" placeholder="Password">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Login</button>
            </div>
            <div class="form-group">
                <a href="../registration/index-r.php">
                <button type="button" class="btn btn-block create-account">Sign in</button></a>
            </div>
            <?php foreach($all_errors as $error): ?>
                <?= "<h5> $error <br></h5>"; ?>
            <?php endforeach; ?>
            <div class="social-media p-3 mb-2 bg-dark text-white">
            <h5>Sign in with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
        </form>
        
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
