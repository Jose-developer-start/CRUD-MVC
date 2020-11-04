<?php require ("./views/plantilla/header.php"); ?>
    <!----MAIN------>
    <section class="container my-4 table-responsive">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Photo example</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->BD->getData() as $data):?>
                        <tr class="text-center">
                            <td><?php echo $data->ID ?></td>
                            <td><?php echo $data->Nombre ?></td>
                            <td><?php echo $data->Correo ?></td>
                            <td><?php echo $data->Clave ?></td>
                            <td><?php echo $data->Foto ?></td>
                            <td><a class="btn btn-secondary" href="?option=update&id=<?php echo $data->ID ?>">Edit</a>
                            <a class="btn btn-danger" href="?option=delete&id=<?php echo $data->ID ?>">Delete</a></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php require ("./views/plantilla/footer.php"); ?>