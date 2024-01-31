<?php include_once '../views/layouts/header.php'; ?>

<section class="mt-5 py-2 px-5">
    <h2 class="pt-4">Crear Nueva Tarea</h2>
    <form id="taskForm" action="index.php?action=store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Título:</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="mb-3">
            <label for="task_description" class="form-label">Descripción:</label>
            <textarea class="form-control" name="task_description"></textarea>
        </div>

        <div class="mb-3">
            <label for="task_state" class="form-label">Estado:</label>
            <select class="form-select" id="inputGroupSelect01" name="task_state">
                <option selected>Escoge...</option>
                <option value="1">Por Hacer</option>
                <option value="2">En Progreso</option>
                <option value="3">Finalizado</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar Tarea</button>
            <button type="button" class="btn btn-secondary" onclick="location.href='index.php'">Cancelar</button>
        </div>
    </form>
</section>


<?php include_once '../views/layouts/footer.php'; ?>