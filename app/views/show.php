<?php include_once __DIR__ . '/layouts/header.php'; ?>

<section class="mt-5 mx-3">
    <h2 class="pt-4">Detalles de la Tarea</h2>
    <form action="index.php?action=index" method="POST">
        <button type="submit" class="btn btn-primary mt-2 ">Regresar</button>
    </form>
    <div class="table-responsive">
        <table class="table table-striped table-bordered mt-2">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID_TAREA</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $task['id_task']; ?></td>
                    <td><?php echo $task['title']; ?></td>
                    <td><?php echo $task['task_description']; ?></td>
                    <td><?php echo $task['task_state']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="index.php?action=edit&id=<?php echo $task['id_task']; ?>">
                            <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                        </a>
                        <a class="btn btn-danger" href="index.php?action=delete&id=<?php echo $task['id_task']; ?>">
                            <i class="fa fa-trash"></i> Borrar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>