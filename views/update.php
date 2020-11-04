<?php require ("./views/plantilla/header.php"); ?>

<section class="col-12 col-sm-12 col-md-6 offset-md-3 my-4">
    <h2 class="text-center my-4">Add Students</h2>
    <form action="?option=add_data" method="POST">
    	<!---ID--->
    	<input name="id" type="hidden" value="<?php echo $getData->ID ?>">
        <div class="form-group"><input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $getData->Nombre ?>">
        </div>
        <div class="form-group"><input name="email" type="text" class="form-control" placeholder="Email" value="<?php echo $getData->Correo ?>">
        </div>
        <div class="form-group"><input name="pass" type="text" class="form-control" placeholder="Password" value="<?php echo $getData->Clave ?>">
        </div>
        <div class="form-group"><input name="photo" type="text" class="form-control" placeholder="Photo" value="<?php echo $getData->Foto ?>">
        </div>
        <input type="submit" value="Update" class="btn btn-primary btn-block">

    </form>
</section>

<?php require ("./views/plantilla/footer.php"); ?>