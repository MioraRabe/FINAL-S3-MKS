<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre?></title>
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/shop-homepage.css" rel="stylesheet">
</head>
<body> 
    <?php
        $this->load->view("static/header");
        $this->load->view($contents);
        $this->load->view("static/footer");
    ?>
</body>
</html>