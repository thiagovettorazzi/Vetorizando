<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendário Pet – Vetorizando</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <style>
            @media (max-width: 480px) { .months-grid { grid-template-columns: repeat(2,1fr); } }
        </style>
    </head>

    <body>
        <!-- HEADER / NAV -->
        <?php require_once("includes/topo.php"); ?>

        <section class="page-hero">
            <div class="container">
                <p class="page-hero-eyebrow">Datas comemorativas</p>
                <h1>Calendário <em>Pet 2025</em></h1>
                <p>Todas as datas importantes do universo animal reunidas em um só lugar. Planeje seu conteúdo com antecedência e nunca perca uma data relevante para seus tutores.</p>
            </div>
        </section>

        <section class="calendar-section section">
            <div class="container">

                <div class="section-header reveal" style="max-width:720px;">
                    <p class="section-eyebrow">Selecione um mês</p>
                    <h2 class="section-title">Escolha o mês para ver as <em>datas comemorativas</em></h2>
                </div>

                <div class="months-grid reveal">
                    <button class="month-btn" data-month="1">
                        <span class="month-num">01</span>
                        <span class="month-name">Janeiro</span>
                        <span class="month-count">4 datas</span>
                    </button>
                    <button class="month-btn" data-month="2">
                        <span class="month-num">02</span>
                        <span class="month-name">Fevereiro</span>
                        <span class="month-count">4 datas</span>
                    </button>
                    <button class="month-btn" data-month="3">
                        <span class="month-num">03</span>
                        <span class="month-name">Março</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="4">
                        <span class="month-num">04</span>
                        <span class="month-name">Abril</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="5">
                        <span class="month-num">05</span>
                        <span class="month-name">Maio</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="6">
                        <span class="month-num">06</span>
                        <span class="month-name">Junho</span>
                        <span class="month-count">4 datas</span>
                    </button>
                    <button class="month-btn" data-month="7">
                        <span class="month-num">07</span>
                        <span class="month-name">Julho</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="8">
                        <span class="month-num">08</span>
                        <span class="month-name">Agosto</span>
                        <span class="month-count">4 datas</span>
                    </button>
                    <button class="month-btn" data-month="9">
                        <span class="month-num">09</span>
                        <span class="month-name">Setembro</span>
                        <span class="month-count">9 datas</span>
                    </button>
                    <button class="month-btn" data-month="10">
                        <span class="month-num">10</span>
                        <span class="month-name">Outubro</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="11">
                        <span class="month-num">11</span>
                        <span class="month-name">Novembro</span>
                        <span class="month-count">5 datas</span>
                    </button>
                    <button class="month-btn" data-month="12">
                        <span class="month-num">12</span>
                        <span class="month-name">Dezembro</span>
                        <span class="month-count">5 datas</span>
                    </button>
                </div>

                <!-- PANEL DE DATAS -->
                <div class="month-dates-panel" id="monthPanel"></div>

                <!-- DICA -->
                <div style="background: var(--white-pure); border-radius: var(--radius-lg); padding: 2.5rem 3rem; margin-top: 4rem; border-left: 4px solid var(--gold-light); box-shadow: var(--shadow-sm);" class="reveal">
                    <p class="section-eyebrow">Dica da Vetorizando</p>
                    <h3 style="font-family:'Cormorant Garamond',serif; font-size:1.5rem; font-weight:400; margin-bottom:0.75rem;">Use o calendário para planejar seu conteúdo com <em>antecedência</em></h3>
                    <p style="color: var(--text-mid); font-size:0.95rem; line-height:1.8;">As datas comemorativas são uma excelente oportunidade para criar conteúdo relevante e engajador para seus tutores. Planeje com pelo menos 2 semanas de antecedência e combine posts orgânicos com campanhas impulsionadas para maximizar o alcance.</p>
                    <a href="contato.php" style="display:inline-block; margin-top:1.5rem;" class="btn btn-gold">Preciso de ajuda com meu conteúdo</a>
                </div>

            </div>
        </section>

        <!-- CTA -->
        <section class="cta-section">
            <div class="cta-bg"><div class="cta-orb"></div></div>
            <div class="container">
                <div class="cta-content reveal">
                    <p class="section-eyebrow">Transforme datas em resultados</p>
                    <h2 class="cta-title">Deixe a Vetorizando criar o conteúdo <em>para você</em></h2>
                    <p class="cta-subtitle">Nossa equipe planeja e cria todo o conteúdo baseado no calendário pet, para que você foque no que mais importa: cuidar dos animais.</p>
                    <a href="contato.php" class="btn btn-gold btn-large">Quero contratar</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php require_once("includes/rodape.php"); ?>
    </body>
</html>