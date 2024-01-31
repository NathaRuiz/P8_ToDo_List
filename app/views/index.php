<?php include_once '../views/layouts/header.php'; ?>

<section class="mt-5">
<form  action="create.php?action=create" method="POST">
<button type="submit" class="btn btn-primary">Crear Tarea</button>
</form>
    <div class="table-responsive mt-5">
        <?php if (!empty($tasks)): ?>
            <table class="table table-striped table-bordered mt-5">
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
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td scope="row"><?php echo $task['id_task']; ?></td>
                            <td><?php echo $task['title']; ?></td>
                            <td><?php echo $task['task_description']; ?></td>
                            <td><?php echo $task['task_state']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $task['id_task']; ?>">Editar</a>
                                <a href="delete.php?id=<?php echo $task['id_task']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay tareas disponibles.</p>
        <?php endif; ?>
    </div>
</section>

<?php include_once '../views/layouts/footer.php'; ?>
