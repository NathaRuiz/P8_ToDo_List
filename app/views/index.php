<?php include_once __DIR__ . '/layouts/header.php'; ?>

<section class="mt-5 mx-3 mb-5">
    <h2 class="pt-4">Mi lista de Tareas</h2>
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        
        <a class="btn btn-primary mt-2" href="index.php?action=create">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            Crear Tarea
        </a>

        <form action="index.php?action=filter" method="POST" class="d-flex align-items-center align-self-center bg-light p-1 rounded gap-2">
            <label for="filter" >Filtrar:</label>
            <select name="filter" id="filter" class="form-select">
                <option value="" >Todos los estados</option>
                <option value="Por Hacer" <?= ($_GET['filter'] ?? '') === 'Por Hacer' ? 'selected' : '' ?>>Por Hacer</option>
                <option value="En Progreso" <?= ($_GET['filter'] ?? '') === 'En Progreso' ? 'selected' : '' ?>>En Progreso</option>
                <option value="Finalizado" <?= ($_GET['filter'] ?? '') === 'Finalizado' ? 'selected' : '' ?>>Finalizado</option>
            </select>

            <button class="btn btn-secondary " type="submit">Aplicar</button>
        </form>
    </div>

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
                                <a class="btn btn-info" href="index.php?action=show&id=<?php echo $task['id_task']; ?>">
                                    <i class="fa fa-eye"></i> Ver Detalles
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