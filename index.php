<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluga-se Histórias | Livraria Online</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="cabecalho">
        <a href="index.html" class="logo">
            Aluga-se <span>Histórias.</span>
        </a>

        <nav>
            <a href="index.html">Início</a>
            <a href="catalogo.html">Catálogo</a>
            <a href="#categorias">Categorias</a>
            <a href="#como-funciona">Como funciona</a>
        </nav>

        <a href="catalogo.html" class="botao-header">
            Encontrar livros
        </a>
    </header>


    <!-- DESTAQUE PRINCIPAL -->
    <main>

        <section class="hero">

            <div class="hero-conteudo">
                <span class="etiqueta">UM NOVO JEITO DE LER</span>

                <h1>
                    Sua próxima história
                    <span>começa aqui.</span>
                </h1>

                <p>
                    Descubra novos mundos, conheça diferentes autores
                    e encontre seu próximo livro favorito.
                    Uma boa história merece ser compartilhada.
                </p>

                <div class="hero-botoes">
                    <a href="catalogo.html" class="botao-principal">
                        Explorar livros
                    </a>

                    <a href="#como-funciona" class="botao-secundario">
                        Como funciona?
                    </a>
                </div>
            </div>

            <div class="hero-imagem">
                <img src="img/livro1.jpg" alt="Livro em destaque">
                <div class="cartao-flutuante">
                    <span>Seu próximo capítulo</span>
                    <strong>Começa com uma leitura.</strong>
                </div>
            </div>

        </section>


        <!-- PESQUISA -->
        <section class="pesquisa">
            <div>
                <h2>Encontre sua próxima leitura</h2>
                <p>Explore nosso catálogo de histórias.</p>
            </div>

            <form action="catalogo.html" method="get">
                <input
                    type="search"
                    name="busca"
                    placeholder="Digite o título ou autor..."
                >

                <button type="submit">Pesquisar</button>
            </form>
        </section>


        <!-- CATEGORIAS -->
        <section class="secao" id="categorias">

            <div class="titulo-secao">
                <div>
                    <span class="etiqueta">EXPLORE</span>
                    <h2>Encontre seu gênero favorito</h2>
                    <p>Histórias para todos os momentos.</p>
                </div>

                <a href="catalogo.html" class="link-secao">
                    Ver catálogo completo →
                </a>
            </div>

            <div class="categorias">

                <a href="catalogo.html" class="categoria categoria-azul">
                    <span>01</span>
                    <h3>Romance</h3>
                    <p>Histórias que emocionam.</p>
                </a>

                <a href="catalogo.html" class="categoria categoria-rosa">
                    <span>02</span>
                    <h3>Suspense</h3>
                    <p>Mistérios e descobertas.</p>
                </a>

                <a href="catalogo.html" class="categoria categoria-verde">
                    <span>03</span>
                    <h3>Fantasia</h3>
                    <p>Novos mundos para explorar.</p>
                </a>

                <a href="catalogo.html" class="categoria categoria-vinho">
                    <span>04</span>
                    <h3>Drama</h3>
                    <p>Histórias inesquecíveis.</p>
                </a>

            </div>

        </section>


        <!-- LIVROS EM DESTAQUE -->
        <section class="secao livros-secao">

            <div class="titulo-secao">
                <div>
                    <span class="etiqueta">NOSSO ACERVO</span>
                    <h2>Livros em destaque</h2>
                    <p>Descubra algumas histórias disponíveis.</p>
                </div>

                <a href="catalogo.html" class="link-secao">
                    Ver todos →
                </a>
            </div>

            <div class="livros">

                <article class="livro-card">
                    <img src="img/livro1.jpg" alt="Capa do livro 1">

                    <div class="livro-info">
                        <span class="livro-categoria">Romance</span>
                        <h3>Nome do livro</h3>
                        <p>Autor do livro</p>
                        <a href="livro.html">Ver detalhes →</a>
                    </div>
                </article>

                <article class="livro-card">
                    <img src="img/livro2.jpg" alt="Capa do livro 2">

                    <div class="livro-info">
                        <span class="livro-categoria">Suspense</span>
                        <h3>Nome do livro</h3>
                        <p>Autor do livro</p>
                        <a href="livro.html">Ver detalhes →</a>
                    </div>
                </article>

                <article class="livro-card">
                    <img src="img/livro3.jpg" alt="Capa do livro 3">

                    <div class="livro-info">
                        <span class="livro-categoria">Fantasia</span>
                        <h3>Nome do livro</h3>
                        <p>Autor do livro</p>
                        <a href="livro.html">Ver detalhes →</a>
                    </div>
                </article>

            </div>

        </section>


        <!-- COMO FUNCIONA -->
        <section class="como-funciona" id="como-funciona">

            <div class="como-texto">
                <span class="etiqueta">SIMPLES E FÁCIL</span>
                <h2>Uma nova história em poucos passos.</h2>
                <p>
                    Alugar um livro pode ser simples.
                    Escolha sua leitura e acompanhe as informações
                    da solicitação.
                </p>
            </div>

            <div class="passos">

                <div class="passo">
                    <span>01</span>
                    <div>
                        <h3>Escolha seu livro</h3>
                        <p>Explore o catálogo e encontre uma história.</p>
                    </div>
                </div>

                <div class="passo">
                    <span>02</span>
                    <div>
                        <h3>Solicite o aluguel</h3>
                        <p>Preencha seus dados e escolha o livro.</p>
                    </div>
                </div>

                <div class="passo">
                    <span>03</span>
                    <div>
                        <h3>Aproveite a leitura</h3>
                        <p>Prepare-se para conhecer um novo mundo.</p>
                    </div>
                </div>

            </div>

        </section>


        <!-- CHAMADA FINAL -->
        <section class="chamada-final">
            <span>ALUGA-SE HISTÓRIAS</span>

            <h2>Todo livro guarda um mundo. Qual você vai descobrir?</h2>

            <a href="catalogo.html" class="botao-principal">
                Descobrir livros
            </a>
        </section>

    </main>


    <!-- RODAPÉ -->
    <footer class="rodape">

        <div>
            <a href="index.html" class="logo logo-rodape">
                Aluga-se <span>Histórias.</span>
            </a>

            <p>Compartilhando histórias e incentivando a leitura.</p>
        </div>

        <div class="rodape-links">
            <a href="index.html">Início</a>
            <a href="catalogo.html">Catálogo</a>
            <a href="aluguel.html">Aluguel</a>
        </div>

        <p class="copyright">
            © 2026 Aluga-se Histórias. Projeto Integrador.
        </p>

    </footer>

</body>
</html>
