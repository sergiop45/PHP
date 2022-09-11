<main>

    <section>
        <a href='index.php'>
            <button class='btn btn-success'>Voltar</button>
        </a>
    </section>

</main>

<h2 class='mt-4'>Cadastro de Vaga:</h2>

<form method='post' class='form-control bg-dark text-light' action='./cadastrar.php'>

    <div class='form-group mb-3'>
        <label class='form-label'>Titulo:</label>
        <input type='text' class='form-control' name='titulo' />
    </div>

    <div class='form-group mb-3'>
        <label class='form-label'>Descrição:</label>
        <textarea class='form-control' name='descricao' rows='5'></textarea>
        
    </div>

    <div class='form-group mb-3'>
        <label class='form-label'>Status:</label>

        <div>
            <div class='form-check form-check-inline'>
                <label>
                    <input type='radio' name='ativo' value='s' checked> Ativo
                </label>
            </div>
            <div class='form-check form-check-inline'>
                <label>
                    <input type='radio' name='ativo' value='n'> Desativado
                </label>
            </div>
        </div>

    </div>

    <div class='form-group mb-3'>
        <label class='form-label'>Data:</label>
        <input type='date' class='form-control' name='data' />
    </div>

    <div class='form-group'>
        <button class='btn btn-success'>Enviar</button>
    </div>

</form>