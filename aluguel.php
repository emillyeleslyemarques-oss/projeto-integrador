<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar aluguel</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

    <header>
        <div class="logo">Aluga-se <span>Histórias</span></div>

        <nav>
            <a href="index.html">Início</a>
            <a href="catalogo.html">Catálogo</a>
        </nav>
    </header>

    <main class="catalogo">

        <h1>Solicitar aluguel</h1>

        <p>Preencha as informações para solicitar seu livro.</p>

        <form class="formulario">

            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" placeholder="Digite seu nome">

            <label for="email">E-mail:</label>
            <input type="email" id="email" placeholder="Digite seu e-mail">

            <label for="data">Data desejada para retirada:</label>
            <input type="date" id="data">

            <button type="submit" class="botao">
                Enviar solicitação
            </button>

        </form>

    </main>

    <footer>
        <p>© 2026 Aluga-se Histórias</p>
    </footer>

</body>
</html>
```