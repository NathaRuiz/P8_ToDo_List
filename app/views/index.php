<?php include_once __DIR__ . '/layouts/header.php'; ?>

<section class="mt-5 mx-3">
<h2 class="pt-4">Mi lista de Tareas</h2>
<form  action="index.php?action=create" method="POST">
<button type="submit" class="btn btn-primary mt-2 ">Crear Tarea</button>
</form>
    <div class="table-responsive">
        <?php if (!empty($tasks)): ?>
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
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td scope="row"><?php echo $task['id_task']; ?></td>
                            <td><?php echo $task['title']; ?></td>
                            <td><?php echo $task['task_description']; ?></td>
                            <td><?php echo $task['task_state']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $task['id_task']; ?>">Editar</a>
                                <a href="index.php?action=delete&id=<?php echo $task['id_task']; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay tareas Registradas.</p>
        <?php endif; ?>
    </div>
</section>

<?php include_once __DIR__ . '/layouts/footer.php';?>
