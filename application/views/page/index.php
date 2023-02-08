<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko:400,700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/Footer-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/styles.css">
</head>

<body>
    <section class="login-clean">
        <form action="<?php echo base_url('login/login'); ?>" method="post">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="mb-3"><input class="form-control" type="password" name="mdp" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Log In</button></div>
            <a class="forgot" href="<?php echo base_url('login/inscription'); ?>">Inscription</a>
        </form>
    </section>
    <script src="assets/login/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>