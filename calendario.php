<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        $titulo             = "Calendário Pet";
        $meta_category      = "";
        $meta_description   = "";
        
        require_once("includes/head.php");
        ?>
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
                    <?php
                    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                    for ($i = 0; $i < 12; $i++) {
                        $num = str_pad($i + 1, 2, "0", STR_PAD_LEFT);
                        $mesNome = $meses[$i];
                    ?>
                    <button class="month-btn" data-month="<?= $i + 1 ?>">
                        <span class="month-num"><?= $num ?></span>
                        <span class="month-name"><?= $mesNome ?></span>
                        <span class="month-count"></span>
                    </button>
                    <?php } ?>
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

        <!-- Scripts Específicos -->
        <script src="js/calendario.js"></script>
    </body>
</html>