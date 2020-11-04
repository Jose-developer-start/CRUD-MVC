<?php require ("./views/plantilla/header.php"); ?>

<section class="col-12 col-sm-12 col-md-6 offset-md-3 my-4">
    <h2 class="text-center my-4">Add Students</h2>
    <form action="?option=add_data" method="POST">
        <div class="form-group"><input name="name" type="text" class="form-control" placeholder="Name"></div>
        <div class="form-group"><input name="email" type="text" class="form-control" placeholder="Email"></div>
        <div class="form-group"><input name="pass" type="password" class="form-control" placeholder="Password"></div>
        <div class="form-group"><input name="photo" type="text" class="form-control" placeholder="Photo"></div>
        <input type="submit" class="btn btn-primary btn-block">

    </form>
</section>
<!----Footer-->
<?php require ("./views/plantilla/footer.php"); ?>