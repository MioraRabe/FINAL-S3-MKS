<section style="margin-top: 4%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-xl-flex justify-content-xl-center" style="height: 392px;background: rgba(255,255,255,0);"><img class="d-xl-flex justify-content-xl-center" style="width: auto;height: 100%;" src="<?php echo base_url();?>assets/images/<?php echo $objects['cover']?>"></div>
                </div>
                <div class="col-md-6">
                    <div style="height: 392px;background: #f5f5f5;padding: 36px;">
                        <h1 style="font-size: 29px;text-align: left;">Detail</h1>
                        <p style="margin-top: 6%;"><strong>Produit</strong></p>
                        <p><?php echo $objects['descri']?></p>
                        <p>Ar <?php echo $objects['valeur']?></p>
                        <p><strong>Propriétaire: </strong><?php echo $objects['userName']?></p>

                        <form action="proposer" method="post">
                            <input type="hidden" name="otherObj" value="<?php echo $objects['idObjet'];?>">
                            <input type="hidden" name="otherId" value="<?php echo $objects['idUser'];?>">
                            <p>Echanger contre mon:
<select name="myObj" class="form-select" style="margin-left: 1%;border-radius: 6px;">
<?php
  foreach($myobjects as $obj){
?>
<option value="<?php echo $obj['idObjet']?>"><?php echo $obj['nom']?></option>
<?php }?>
</select>
                        </p>
                        <input class="btn btn-primary" type="submit" value="Echanger">
                        <!-- <button class="btn btn-primary" type="button">Echanger</button> -->
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
</section>