<?php include 'assets/layouts/header.php'; ?>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-5 text-center mx-auto">
                <h1 class="title1" id="title1">Descobrir meu Signo</h1>
                <div class="card p-4" id="card">
                    <form id="zodiacForm">
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Descobrir</button>
                    </form>
                </div>
                <div id="resultado" class="d-none">
                    <h2>Seu signo: <span id="signo"></span></h2>
                    <h3>Elemento: <span id="elemento"></span></h3>
                    <h3>Planeta Regente: <span id="planetaRegente"></span></h3>
                    <button type="submit" class="btn btn-primary" onclick="location.reload(); return false;">Tentar novamente</button>
                </div>
            </div>
        </div>
<?php include 'assets/layouts/footer.php'; ?>