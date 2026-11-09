<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Aluga-se Histórias</title>

    <link rel="stylesheet" href="estilos/estilos.css">
    <script src="js/livros.js" defer></script>
    <script src="js/script.js" defer></script>
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

        <h1>Nosso catálogo</h1>
        <p>Encontre uma história para chamar de sua.</p>

        <div class="filtros">

            <input
                type="text"
                id="pesquisa"
                placeholder="Pesquisar livro ou autor..."
            >

            <select id="categoria">
                <option value="">Todas as categorias</option>
                <option value="Ficção">Ficção</option>
                <option value="Romance">Romance</option>
                <option value="Infantil">Infantil</option>
                <option value="Suspense">Suspense</option>
                <option value="Tecnologia">Tecnologia</option>
            </select>

        </div>

        <div class="livros-container" id="livros-container"></div>

        <p id="mensagem-vazia" hidden>
            Nenhum livro encontrado.
        </p>

    </main>

    <footer>
        <p>© 2026 Aluga-se Histórias</p>
    </footer>

</body>
</html>
```