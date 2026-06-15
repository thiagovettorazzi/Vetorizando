<?php
$current_page = 'calendario';
$page_title = 'Calendário Pet';
$page_description = 'Calendário completo com datas comemorativas do mundo pet e veterinário. Planeje seus conteúdos e campanhas.';
$extra_css = '/css/calendario.css';
$extra_js = '/js/calendario.js';
include 'includes/header.php';
?>

<section class="calendario-hero">
    <div class="container">
        <div class="reveal">
            <h1>Calendário Pet</h1>
            <p style="font-size: 1.3rem; max-width: 800px; margin: 1.5rem auto 0;">
                Datas comemorativas do mundo veterinário e pet para planejar seus conteúdos e campanhas
            </p>
        </div>
    </div>
</section>

<section class="section" id="meses-container">
    <div class="container">
        <div class="section-header reveal">
            <h2 class="section-title">Selecione um mês</h2>
            <p class="section-subtitle">Clique em um mês para ver as datas comemorativas</p>
        </div>
        
        <div class="meses-grid">
            <div class="mes-card reveal" data-mes="janeiro">
                <div class="mes-icon">❄️</div>
                <div class="mes-nome">Janeiro</div>
                <div class="mes-info">1 data</div>
            </div>
            
            <div class="mes-card reveal" data-mes="fevereiro">
                <div class="mes-icon">💝</div>
                <div class="mes-nome">Fevereiro</div>
                <div class="mes-info">1 data</div>
            </div>
            
            <div class="mes-card reveal" data-mes="marco">
                <div class="mes-icon">🌸</div>
                <div class="mes-nome">Março</div>
                <div class="mes-info">2 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="abril">
                <div class="mes-icon">🌧️</div>
                <div class="mes-nome">Abril</div>
                <div class="mes-info">2 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="maio">
                <div class="mes-icon">🌺</div>
                <div class="mes-nome">Maio</div>
                <div class="mes-info">1 data</div>
            </div>
            
            <div class="mes-card reveal" data-mes="junho">
                <div class="mes-icon">☀️</div>
                <div class="mes-nome">Junho</div>
                <div class="mes-info">2 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="julho">
                <div class="mes-icon">🎆</div>
                <div class="mes-nome">Julho</div>
                <div class="mes-info">2 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="agosto">
                <div class="mes-icon">🌻</div>
                <div class="mes-nome">Agosto</div>
                <div class="mes-info">3 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="setembro">
                <div class="mes-icon">🍂</div>
                <div class="mes-nome">Setembro</div>
                <div class="mes-info">10 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="outubro">
                <div class="mes-icon">🎃</div>
                <div class="mes-nome">Outubro</div>
                <div class="mes-info">3 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="novembro">
                <div class="mes-icon">🍁</div>
                <div class="mes-nome">Novembro</div>
                <div class="mes-info">3 datas</div>
            </div>
            
            <div class="mes-card reveal" data-mes="dezembro">
                <div class="mes-icon">🎄</div>
                <div class="mes-nome">Dezembro</div>
                <div class="mes-info">3 datas</div>
            </div>
        </div>
    </div>
</section>

<section class="datas-container" id="datas-container">
    <div class="container">
        <button class="btn-voltar" id="btn-voltar">
            ← Voltar para meses
        </button>
        
        <div class="datas-header">
            <h2 id="mes-selecionado">Mês</h2>
            <p>Datas comemorativas e importantes do mundo pet</p>
        </div>
        
        <div class="datas-list" id="datas-content">
        </div>
    </div>
</section>

<section class="section" style="background: var(--white-dark);">
    <div class="container">
        <div class="section-header reveal">
            <h2 class="section-title">Por que usar o Calendário Pet?</h2>
        </div>
        
        <div class="cards-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="card reveal">
                <div class="card-icon">📅</div>
                <h3 class="card-title">Planejamento estratégico</h3>
                <p class="card-text">
                    Organize seus conteúdos com antecedência e aproveite datas importantes para engajar seu público.
                </p>
            </div>
            
            <div class="card reveal">
                <div class="card-icon">💡</div>
                <h3 class="card-title">Ideias de conteúdo</h3>
                <p class="card-text">
                    Nunca fique sem ideias! Use as datas comemorativas para criar posts relevantes e oportunos.
                </p>
            </div>
            
            <div class="card reveal">
                <div class="card-icon">📈</div>
                <h3 class="card-title">Aumente o engajamento</h3>
                <p class="card-text">
                    Conteúdos relacionados a datas especiais tendem a gerar mais interação e alcance nas redes sociais.
                </p>
            </div>
            
            <div class="card reveal">
                <div class="card-icon">🎯</div>
                <h3 class="card-title">Campanhas direcionadas</h3>
                <p class="card-text">
                    Crie campanhas e promoções especiais alinhadas com datas importantes do mercado pet.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--gradient-gold); color: var(--white-light);">
    <div class="container">
        <div class="reveal" style="max-width: 900px; margin: 0 auto; text-align: center;">
            <h2 style="color: var(--white-light); margin-bottom: 1.5rem;">
                Precisa de ajuda com seu planejamento de conteúdo?
            </h2>
            <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.95); margin-bottom: 2rem;">
                A Vetorizando pode cuidar de todo o gerenciamento das suas redes sociais, incluindo planejamento estratégico baseado no calendário pet.
            </p>
            <a href="/gerenciamento-redes-sociais" class="btn" style="background: var(--white-light); color: var(--gold-dark); margin-right: 1rem;">
                Conheça nossos pacotes
            </a>
            <a href="https://wa.me/5551999999999" class="btn btn-outline" style="border-color: var(--white-light); color: var(--white-light);" target="_blank">
                Fale conosco
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
