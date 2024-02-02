<?php include_once __DIR__ . '/layouts/header.php' ?>


<section class="mt-5 py-2 px-5">
    <h2 class="pt-4">Crear Nueva Tarea</h2>
    <form action="index.php?action=store" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Título:</label>
            <input type="text" class="form-control" name="title" required>
            <small class="text-muted ">El título es un campo obligatorio.</small>
        </div>

        <div class="mb-3">
            <label for="task_description" class="form-label">Descripción:</label>
            <textarea class="form-control" name="task_description"></textarea>
        </div>

        <div class="mb-3">
            <label for="task_state" class="form-label">Estado:</label>
            <select class="form-select" id="inputGroupSelect01" name="task_state">
                <option value="">Opciones...</option>
                <option value="Por Hacer">Por Hacer</option>
                <option value="En Progreso">En Progreso</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Guardar Tarea</button>
            <button type="button" class="btn btn-secondary" onclick="location.href='index.php?action=index'">Cancelar</button>
        </div>
    </form>
</section>


<?php include_once __DIR__ . '/layouts/footer.php'; ?>