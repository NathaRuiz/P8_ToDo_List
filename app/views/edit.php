<?php include_once __DIR__ . '/layouts/header.php' ?>


<section class="mt-5 py-2 px-5">
    <h2 class="pt-4">Actualizar datos de un Tarea</h2>
    <form action="index.php?action=update" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Título:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $task['title']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="task_description" class="form-label">Descripción:</label>
            <textarea class="form-control" name="task_description"><?php echo $task['task_description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="task_state" class="form-label">Estado:</label>
            <select class="form-select" id="inputGroupSelect01" name="task_state">
                <option value="" <?php echo ($task['task_state'] === '') ? 'selected' : ''; ?>>Opciones...</option>
                <option value="Por Hacer" <?php echo ($task['task_state'] === 'Por Hacer') ? 'selected' : ''; ?>>Por Hacer</option>
                <option value="En Progreso" <?php echo ($task['task_state'] === 'En Progreso') ? 'selected' : ''; ?>>En Progreso</option>
                <option value="Finalizado" <?php echo ($task['task_state'] === 'Finalizado') ? 'selected' : ''; ?>>Finalizado</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <button type="button" class="btn btn-secondary" onclick="location.href='index.php?action=index'">Cancelar</button>
        </div>
    </form>
</section>


<?php include_once __DIR__ . '/layouts/footer.php'; ?>