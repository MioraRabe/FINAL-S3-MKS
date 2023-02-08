<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Takalo</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko:400,700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
   
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: rgb(2,21,35);color: rgb(255,255,255);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Takalo-Takalo</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2" style="color: rgb(255,255,255);background: #ffffff;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(255,255,255);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <form class="d-xl-flex" style="height: 40px;"><i class="fa fa-search" style="font-size: 16px;margin-left: 5%;margin-top: 2%;"></i><input class="form-control" type="search" style="margin-left: 2%;border-style: none;border-radius: 9px;" name="recherche" placeholder="Recherche" autocomplete="on">
                    <p style="color: rgba(255,255,255,0.55);margin-left: 3%;height: 30px;margin-top: 2%;">Categorie</p>
                    <select class="form-select" style="margin-left: 1%;border-radius: 6px;" name="categorie">
                        <option value="12">Tous</option>
                        <option value="13">This is item 1</option>
                        <option value="14">This is item 2</option>
                    </select><button class="btn btn-primary" type="button" style="background: rgb(196,200,230);color: rgb(54,53,64);margin-left: 2%;border-style: none;">Valider</button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: rgb(255,255,255);"><h5> <?php echo $this->session->userdata('nom')?></h5></a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Liste Echange</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login/deconnexion'); ?>" style="color: rgb(255,255,255);">Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>