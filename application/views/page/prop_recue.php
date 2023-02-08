<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<div class="container" style="margin-top: 50px;">

<div class="row">

  <div class="col-lg-5">

  
    <h1 class="my-4">Liste proposition reçue </h1>
    <?php
    for($i=0;$i<count($otherProp);$i++){
?>
    <div class="list-group">
      <a href="other" class="list-group-item"><?php echo $otherProp[$i]['nom']?> <b>contre</b> <?php echo $myObj[$i]['nom']?></a>
    </div>
<?php } ?>
  </div>
  <!-- /.col-lg-3 -->
<?php
  for($i=0;$i<count($otherProp);$i++){
?>
  <div class="col-lg-12" style="margin-top: 100px;">
    <div class="row">

    <div class="col-lg-2"></div>

      <div class="col-lg-3 col-md-6 mb-4" >
      <div class="card-footer">
            <small class="text-muted"> Proposé</small>
          </div>
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $otherProp[$i]['cover']?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $otherProp[$i]['nom']?></a>
            </h4>
            <h5><?php echo $otherProp[$i]['valeur']?></h5>
            <p class="card-text"><?php echo $otherProp[$i]['descri']?></p>
          </div>
        </div>
      </div>

    <div class="col-lg-2" ></div>

      <div class="col-lg-3 col-md-6 mb-4" >
        
      <div class="card-footer">
            <small class="text-muted">contre mon objet</small>
          </div>
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $myObj[$i]['cover']?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $myObj[$i]['nom']?></a>
            </h4>
            <h5><?php echo $myObj[$i]['valeur']?></h5>
            <p class="card-text"><?php echo $myObj[$i]['descri']?></p>
          </div>
        </div>
        <p>
            <a href="accept?idprop=<?php echo $idprop[$i]?>"><button>Accepter</button></a>
            <a href="refuse?idprop=<?php echo $idprop[$i]?>"><button>Refuser</button></a>
        </p>
      </div>

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

<?php }?>
</div>
<!-- /.container -->
</body>
</html>