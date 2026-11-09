<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo | Aluga-se Histórias</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="cabecalho">
    <a href="index.php" class="logo">📖 Aluga-se Histórias.</a>
    <nav>
        <a href="index.php">Início</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="sobre.php">Sobre</a>
        <a href="aluguel.php">Aluguel</a>
    </nav>
    <a href="catalogo.php" class="botao-header">Encontrar livros</a>
</header>

<main>
    <section class="titulo-pagina">
        <span class="etiqueta">NOSSO ACERVO</span>
        <h1>Nosso Catálogo</h1>
        <p>Descubra sua próxima história.</p>
    </section>

    <section class="secao">
        <form class="filtros" action="catalogo.html" method="get">
            <input type="search" name="busca" placeholder="Pesquisar por título ou autor...">

            <select name="categoria">
                <option value="">Todas as categorias</option>
                <option>Romance</option>
                <option>Suspense</option>
                <option>Fantasia</option>
                <option>Drama</option>
            </select>

            <button type="submit">Pesquisar</button>
        </form>

        <div class="livros">
            <article class="livro-card">
                <img src="img/livro1.jpg" alt="Capa do livro 1">
                <div class="livro-info">
                    <span class="genero-romance">Romance</span>
                    <h3>Jardim de Memórias</h3>
                    <p>Autora: Ana Martins</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="img/livro2.jpg" alt="Capa do livro 2">
                <div class="livro-info">
                    <span class="genero-suspense">Suspense</span>
                    <h3>O Último Segredo</h3>
                    <p>Autor: Lucas Almeida</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="img/livro3.jpg" alt="Capa do livro 3">
                <div class="livro-info">
                    <span class="genero-fantasia">Fantasia</span>
                    <h3>O Reino Esquecido</h3>
                    <p>Autora: Sofia Costa</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="img/livro4.jpg" alt="Capa do livro 4">
                <div class="livro-info">
                    <span class="genero-romance">Romance</span>
                    <h3>Cartas para o Amanhã</h3>
                    <p>Autora: Marina Lopes</p>
                    <p>Disponibilidade: Disponível</p>
                    <a href="livro.php">Ver detalhes →</a>
                </div>
            </article>
        </div>
    </section>
</main>

<footer class="rodape">
    <a href="index.php" class="logo">📖 Aluga-se Histórias.</a>
    <p>Mais que livros, novas histórias.</p>
    <p>© 2026 Aluga-se Histórias.</p>
</footer>

</body>
</html>