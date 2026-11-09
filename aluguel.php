<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar aluguel | Aluga-se Histórias</title>
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
        <span class="etiqueta">SUA PRÓXIMA LEITURA</span>
        <h1>Solicitar aluguel</h1>
        <p>Preencha os dados para solicitar seu livro.</p>
    </section>

    <section class="formulario-container">
        <form class="formulario" action="#" method="post">

            <h2>Seus dados</h2>

            <label for="nome">Nome completo</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>

            <label for="livro">Livro desejado</label>
            <select id="livro" name="livro" required>
                <option value="">Selecione um livro</option>
                <option>Jardim de Memórias</option>
                <option>O Último Segredo</option>
                <option>O Reino Esquecido</option>
                <option>Cartas para o Amanhã</option>
            </select>

            <label for="prazo">Prazo de aluguel</label>
            <select id="prazo" name="prazo" required>
                <option value="">Selecione o prazo</option>
                <option>7 dias</option>
                <option>14 dias</option>
                <option>30 dias</option>
            </select>

            <label class="termos">
                <input type="checkbox" name="termos" required>
                Li e aceito os termos de aluguel.
            </label>

            <button type="submit" class="botao-principal">Enviar solicitação</button>
        </form>
    </section>
</main>

<footer class="rodape">
    <a href="index.php" class="logo">📖 Aluga-se Histórias.</a>
    <p>Mais que livros, novas histórias.</p>
    <p>© 2026 Aluga-se Histórias.</p>
</footer>

</body>
</html>