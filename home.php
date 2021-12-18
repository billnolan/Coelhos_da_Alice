<!DOCTYPE html>
<html lang="pt-Br" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coelhos da Alice - Home</title>

        <link rel="stylesheet" href="style.css">
        <script src="engine.js"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body class="d-flex flex-column h-100">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                Opções de Usuário
                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">
                        Login
                    </button>
                    <button type="button" class="btn btn-primary">
                        Signup
                    </button>
                </div>
            </header>
        </div>

        <div class="container">
            <section id="regras">
            </section>

            <section id="conteudo">
                <?php
                    //Pegar contos criados no DB
                    $conteudo = 'Se tiver logado mostra as opções de conto';
                    echo $conteudo;
                ?>
            </section>
        </div>
        
            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    - Regras
                    - Contato
                </div>
            </footer>
        

    </body>
</html>