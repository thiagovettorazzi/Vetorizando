<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Vetorizando - Marketing Veterinário com estratégia, conhecimento e resultados'; ?>">
    <title><?php echo isset($page_title) ? $page_title . ' | Vetorizando' : 'Vetorizando - Marketing Veterinário'; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/style.css">
    <?php if(isset($extra_css)): ?>
        <link rel="stylesheet" href="<?php echo $extra_css; ?>">
    <?php endif; ?>
</head>
<body>
    <header class="header" id="header">
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">Vetorizando</a>
                
                <nav class="nav" id="nav">
                    <a href="/" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a>
                    <a href="/sobre" class="nav-link <?php echo ($current_page == 'sobre') ? 'active' : ''; ?>">Sobre</a>
                    <a href="/gerenciamento-redes-sociais" class="nav-link <?php echo ($current_page == 'gerenciamento') ? 'active' : ''; ?>">Redes Sociais</a>
                    <a href="/identidades-visuais" class="nav-link <?php echo ($current_page == 'identidades') ? 'active' : ''; ?>">Identidades Visuais</a>
                    <a href="/outros-servicos" class="nav-link <?php echo ($current_page == 'outros-servicos') ? 'active' : ''; ?>">Outros Serviços</a>
                    <a href="/calendario-pet" class="nav-link <?php echo ($current_page == 'calendario') ? 'active' : ''; ?>">Calendário Pet</a>
                </nav>
                
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
