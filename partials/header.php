<?php
if (!isset($pageTitle)) { $pageTitle = 'Meu Site'; }
if (!isset($pageDescription)) { $pageDescription = 'Site simples em PHP'; }
?>
<!doctype html>
<html lang="pt-br" data-theme="system">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:type" content="website">
<script>(function(){try{var s=localStorage.getItem('theme')||'system';var m=window.matchMedia('(prefers-color-scheme: dark)').matches?'dark':'light';var t=s==='system'?m:s;document.documentElement.setAttribute('data-theme', t);}catch(e){}})();</script>
<link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
<a class="skip-link" href="#conteudo">Pular para o conteúdo</a>
<header class="site-header">
<nav class="nav">
<a class="brand" href="./">Meu Site</a>
<ul class="nav-links">
<li><a href="./index.php">Início</a></li>
<li><a href="./arquivo.php">Arquivo</a></li>
</ul>
<button class="theme-toggle" type="button" aria-label="Alternar tema"></button>
</nav>
</header>
