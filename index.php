<?php include 'assets/layouts/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Descobrir meu Signo</h1>
            </div>
            <div class="col-6 text-center mx-auto">
                <div class="card p-4">
                    <form id="zodiacForm">
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Descobrir</button>
                    </form>
                </div>
            </div>
        </div>
<?php include 'assets/layouts/footer.php'; ?>