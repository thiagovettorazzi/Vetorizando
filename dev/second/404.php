<?php
$current_page = '404';
$page_title = 'Página não encontrada';
$page_description = 'A página que você procura não foi encontrada.';
include 'includes/header.php';
?>

<section class="hero" style="min-height: 80vh; display: flex; align-items: center;">
    <div class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <div style="font-size: 8rem; font-weight: 800; background: var(--gradient-gold); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1;">
                404
            </div>
            <h1 style="margin: 2rem 0 1rem;">Página não encontrada</h1>
            <p style="font-size: 1.2rem; margin-bottom: 3rem;">
                Desculpe, a página que você está procurando não existe ou foi movida.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="/" class="btn btn-primary">Voltar para Home</a>
                <a href="/gerenciamento-redes-sociais" class="btn btn-outline">Ver Serviços</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
