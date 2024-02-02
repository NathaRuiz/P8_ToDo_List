<?php include_once __DIR__ . '/layouts/header.php'; ?>

<section class="mt-5 mx-3 mb-5">
    <h2 class="pt-4">Mi lista de Tareas</h2>
    <form action="index.php?action=create" method="POST">
        <button type="submit" class="btn btn-primary mt-2 ">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            Crear Tarea
        </button>
    </form>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">
    <?php if (!empty($tasks)) : ?>
        <?php foreach ($tasks as $task) : ?>
            <div class="col mb-4">
                <div class="card shadow hover">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $task['title']; ?></h5>
                        <p class="card-text"><?php echo $task['task_description']; ?></p>
                        <p class="card-text"><strong>Estado:</strong> <?php echo $task['task_state']; ?></p>
                        <div class="btn-group ">
                            <a class="btn btn-warning" href="index.php?action=edit&id=<?php echo $task['id_task']; ?>">
                                <i class="fas fa-pencil-alt" aria-hidden="true"></i> Editar
                            </a>
                            <a class="btn btn-danger" href="index.php?action=delete&id=<?php echo $task['id_task']; ?>">
                                <i class="fa fa-trash"></i> Borrar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else : ?>
            <p>No hay tareas Registradas.</p>
        <?php endif; ?>
    </div>
</section>

<?php include_once __DIR__ . '/layouts/footer.php'; ?>