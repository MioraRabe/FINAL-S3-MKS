<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<div class="container" style="margin-top: 75px;">

<div class="row">

  <div class="col-lg-3">
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

  <div class="col-lg-9" >

    <div class="row">

<?php
  foreach($otherProp as $obj){
?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo base_url();?>assets/images/<?php echo $obj['cover']?>" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $obj['nom']?></a>
            </h4>
            <h5><?php echo $obj['valeur']?></h5>
            <p class="card-text"><?php echo $obj['descri']?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>
<?php }?>

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
</body>
</html>