<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluga-se Histórias | Início</title>
    <link rel="stylesheet" href="estilos/estilos.css">
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
    <section class="hero">
        <div class="hero-texto">
            <span class="etiqueta">UM NOVO JEITO DE LER</span>
            <h1>Sua próxima história começa aqui.</h1>
            <p>Descubra novos mundos, conheça diferentes autores e encontre seu próximo livro favorito.</p>

            <div class="botoes">
                <a href="catalogo.php" class="botao-principal">Explorar livros</a>
                <a href="#como-funciona" class="botao-secundario">Como funciona?</a>
            </div>
        </div>

        <div class="hero-imagem">
            <img src="img/banner.jpg" alt="Livros em uma livraria aconchegante">
        </div>
    </section>

    <section class="pesquisa">
        <h2>Encontre sua próxima leitura</h2>
        <p>Explore nosso catálogo de histórias.</p>

        <form action="catalogo.php" method="get">
            <input type="search" name="busca" placeholder="Digite o título ou autor...">
            <button type="submit">Pesquisar</button>
        </form>
    </section>

    <section class="secao" id="categorias">
        <div class="titulo-secao">
            <div>
                <span class="etiqueta">EXPLORE</span>
                <h2>Encontre seu gênero favorito</h2>
                <p>Histórias para todos os momentos.</p>
            </div>
            <a href="catalogo.php">Ver catálogo completo →</a>
        </div>

        <div class="categorias">
            <a href="catalogo.php" class="categoria rosa">
                <span>01</span>
                <h3>Romance</h3>
                <p>Histórias que emocionam.</p>
            </a>

            <a href="catalogo.php" class="categoria azul">
                <span>02</span>
                <h3>Suspense</h3>
                <p>Mistérios e descobertas.</p>
            </a>

            <a href="catalogo.php" class="categoria oliva">
                <span>03</span>
                <h3>Fantasia</h3>
                <p>Novos mundos para explorar.</p>
            </a>

            <a href="catalogo.php" class="categoria vinho">
                <span>04</span>
                <h3>Drama</h3>
                <p>Histórias inesquecíveis.</p>
            </a>
        </div>
    </section>

    <section class="secao">
        <div class="titulo-secao">
            <div>
                <span class="etiqueta">NOSSO ACERVO</span>
                <h2>Livros em destaque</h2>
                <p>Descubra algumas histórias disponíveis.</p>
            </div>
            <a href="catalogo.php">Ver todos →</a>
        </div>

        <div class="livros">
            <article class="livro-card">
                <img src="img/livro1.jpg" alt="Capa ilustrada do livro 1">
                <div class="livro-info">
                    <span class="genero-romance">Romance</span>
                    <h3>Jardim de Memórias</h3>
                    <p>Uma história sobre recomeços.</p>
                    <a href="livro.html">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="img/livro2.jpg" alt="Capa ilustrada do livro 2">
                <div class="livro-info">
                    <span class="genero-suspense">Suspense</span>
                    <h3>O Último Segredo</h3>
                    <p>Nem tudo é o que parece.</p>
                    <a href="livro.html">Ver detalhes →</a>
                </div>
            </article>

            <article class="livro-card">
                <img src="img/livro3.jpg" alt="Capa ilustrada do livro 3">
                <div class="livro-info">
                    <span class="genero-fantasia">Fantasia</span>
                    <h3>O Reino Esquecido</h3>
                    <p>Uma aventura por novos mundos.</p>
                    <a href="livro.html">Ver detalhes →</a>
                </div>
            </article>
        </div>
    </section>

    <section class="como-funciona" id="como-funciona">
        <div>
            <span class="etiqueta">SIMPLES ASSIM</span>
            <h2>Como funciona?</h2>
            <p>Uma nova história em poucos passos.</p>
        </div>

        <div class="passos">
            <div class="passo">
                <span>01</span>
                <h3>Escolha seu livro</h3>
                <p>Explore nosso catálogo e encontre sua próxima leitura.</p>
            </div>

            <div class="passo">
                <span>02</span>
                <h3>Solicite o aluguel</h3>
                <p>Preencha seus dados e escolha o livro desejado.</p>
            </div>

            <div class="passo">
                <span>03</span>
                <h3>Aproveite a leitura</h3>
                <p>Receba seu livro e aproveite essa nova história.</p>
            </div>
        </div>
    </section>

    <section class="chamada-final">
        <h2>Todo livro guarda um mundo.</h2>
        <p>Qual você vai descobrir?</p>
        <a href="catalogo.php" class="botao-principal">Descobrir livros</a>
    </section>
</main>

<footer class="rodape">
    <a href="index.php" class="logo">📖 Aluga-se Histórias.</a>
    <p>Mais que livros, novas histórias.</p>
    <p>© 2026 Aluga-se Histórias. Projeto Integrador.</p>
</footer>

</body>
</html>