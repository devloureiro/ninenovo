<?php
$pageTitle = 'Início · Meu Site';
$pageDescription = 'Exemplo de site simples em PHP com tema escuro e layout moderno.';
include __DIR__ . '/partials/header.php';
?>
<main id="conteudo" class="container">
<section class="hero">
<h1>Bem-vindo!</h1>
<p>Este é um site simples em PHP melhorado com layout moderno e tema escuro.</p>
</section>

<section class="card">
<h2>Comece por aqui</h2>
<p>Edite o conteúdo desta página em <code>index.php</code> e crie novas páginas a partir de <code>arquivo.php</code>.</p>
<p>Use o botão no topo para alternar entre claro e escuro.</p>
</section>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>