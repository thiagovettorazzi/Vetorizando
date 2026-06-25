<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        $titulo             = "Sobre Nós - Vetorizando";
        $meta_category      = "sobre, agencia veterinaria, marketing veterinario, vetorizando";
        $meta_description   = "Conheça a Vetorizando: agência especializada em marketing veterinário. Nossa história, missão, valores e o que nos torna únicos no mercado pet.";
        
        require_once("includes/head.php");
        ?>
    </head>

    <body>
        <!-- HEADER / NAV -->
        <?php require_once("includes/topo.php"); ?>

        <!-- HERO DA PÁGINA -->
        <section class="page-hero sobre-hero">
            <div class="sobre-hero-bg">
                <div class="sobre-hero-orb sobre-hero-orb-1"></div>
                <div class="sobre-hero-orb sobre-hero-orb-2"></div>
                <div class="sobre-hero-ring sobre-hero-ring-1"></div>
                <div class="sobre-hero-ring sobre-hero-ring-2"></div>
            </div>
            <div class="container">
                <p class="page-hero-eyebrow">Quem somos</p>
                <h1>Uma agência que <em>vive</em><br>o universo veterinário</h1>
                <p>Especializados em marketing para clínicas, hospitais e médicos veterinários. Aqui, cada estratégia nasce do profundo conhecimento do setor.</p>
                <div class="sobre-hero-badges">
                    <div class="sobre-badge-pill">🐾 Especialistas em vet</div>
                    <div class="sobre-badge-pill">📅 Desde 2016</div>
                    <!-- <div class="sobre-badge-pill">✅ +200 clínicas atendidas</div> -->
                </div>
            </div>
        </section>

        <!-- HISTÓRIA -->
        <section class="section" style="background: var(--white-pure);">
            <div class="container">
                <div class="about-grid">
                    <div class="about-text reveal">
                        <p class="section-eyebrow">Nossa história</p>
                        <h2 class="section-title">Nascemos da paixão por animais e pela <em>comunicação</em></h2>
                        <p class="section-body">A Vetorizando nasceu da percepção de que a medicina veterinária merecia uma agência que entendesse de verdade o setor — suas especificidades, suas regulamentações e, acima de tudo, seus profissionais.</p>
                        <p class="section-body">Desde 2016, ajudamos clínicas, hospitais veterinários e médicos veterinários a construírem uma presença digital sólida, ética e que gera resultados reais. Não somos uma agência generalista que "também faz" veterinário: <strong>somos especialistas.</strong></p>
                        <p class="section-body">Cada conteúdo que criamos, cada campanha que desenvolvemos e cada estratégia que aplicamos é pensada com olhar clínico e mercadológico — porque entendemos o dia a dia de quem cuida dos animais.</p>
                    </div>
                    <div class="about-visual reveal reveal-delay-2">
                        <div class="about-card-main">
                            <div class="about-card-inner">
                                <div class="about-icon">🐾</div>
                                <p class="about-card-text">"Sua clínica merece uma agência que fala a mesma língua que você."</p>
                            </div>
                            <div class="about-badge">Fundada em 2016</div>
                        </div>
                        <div class="about-card-float">
                            <span class="float-num">+200</span>
                            <span class="float-text">clínicas e hospitais atendidos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MISSÃO / VISÃO / VALORES -->
        <!--
        <section class="section" style="background: var(--white-warm);">
            <div class="container">
                <div class="section-header reveal">
                    <p class="section-eyebrow">Nossos pilares</p>
                    <h2 class="section-title">O que nos <em>move</em> todos os dias</h2>
                </div>
                <div class="services-grid">
                    <div class="service-card reveal reveal-delay-1">
                        <div class="service-icon">🎯</div>
                        <h3>Missão</h3>
                        <p>Elevar a comunicação da medicina veterinária, conectando clínicas e hospitais aos tutores de forma ética, estratégica e humana — promovendo o bem-estar animal por meio da informação de qualidade.</p>
                    </div>
                    <div class="service-card reveal reveal-delay-2">
                        <div class="service-icon">🔭</div>
                        <h3>Visão</h3>
                        <p>Ser a maior referência em marketing veterinário do Brasil, reconhecida pela excelência técnica, pela ética na comunicação e pelos resultados que transformam carreiras e negócios.</p>
                    </div>
                    <div class="service-card service-card-highlight reveal reveal-delay-3">
                        <div class="service-icon">💛</div>
                        <h3>Valores</h3>
                        <p>Ética, especialização, transparência, respeito ao bem-estar animal, comprometimento com resultados e respeito às regulamentações do CFMV.</p>
                    </div>
                </div>
            </div>
        </section>
        -->

        <!-- REDES SOCIAIS — SOBRE GESTÃO -->
        <section class="section sobre-redes-section">
            <div class="sobre-redes-bg">
                <div class="sobre-redes-orb"></div>
            </div>
            <div class="container">
                <div class="sobre-redes-grid">
                    <div class="sobre-redes-text reveal">
                        <p class="section-eyebrow sobre-redes-eyebrow">O que fazemos</p>
                        <h2 class="section-title sobre-redes-title">Redes sociais estratégicas para o <em>mercado veterinário</em></h2>
                        <p class="sobre-redes-lead">Gerenciar redes sociais vai muito além de publicar conteúdos.</p>
                        <p class="section-body" style="color: rgba(255,255,255,0.75);">É necessário planejamento, consistência, estratégia e conhecimento do público para transformar seguidores em clientes e fortalecer a autoridade da marca.</p>
                        <p class="section-body" style="color: rgba(255,255,255,0.75);">Na Vetorizando, todos os pacotes são desenvolvidos para criar uma presença digital profissional e alinhada aos objetivos do seu negócio.</p>
                        <a href="outras-solucoes.php" class="btn btn-gold sobre-redes-btn">Conheça nossos pacotes</a>
                    </div>
                    <div class="sobre-redes-features reveal reveal-delay-2">
                        <div class="sobre-redes-card">
                            <p class="sobre-redes-card-title">Todos os pacotes incluem</p>
                            <ul class="sobre-includes-list">
                                <li><span class="sobre-check">✔</span> Planejamento estratégico de conteúdo</li>
                                <li><span class="sobre-check">✔</span> Calendário mensal de publicações</li>
                                <li><span class="sobre-check">✔</span> Criação de conteúdos e artes</li>
                                <li><span class="sobre-check">✔</span> Desenvolvimento de legendas completas</li>
                                <li><span class="sobre-check">✔</span> Administração do Instagram</li>
                                <li><span class="sobre-check">✔</span> Organização da página</li>
                                <li><span class="sobre-check">✔</span> Criação e atualização de destaques</li>
                                <li><span class="sobre-check">✔</span> Cartão virtual</li>
                                <li><span class="sobre-check">✔</span> Controle e acompanhamento das postagens</li>
                                <li><span class="sobre-check">✔</span> Grupo de WhatsApp para alinhamento e aprovação</li>
                                <li><span class="sobre-check">✔</span> Acompanhamento de métricas e insights</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CAPTAÇÃO DE CONTEÚDO -->
        <section class="section" style="background: var(--white-pure);">
            <div class="container">
                <div class="section-header reveal">
                    <p class="section-eyebrow">Produção de conteúdo</p>
                    <h2 class="section-title">Captação <em>presencial</em> incluída nos pacotes completos</h2>
                    <p class="section-body" style="text-align:center; margin:0 auto; max-width: 600px;">Os pacotes completos incluem captação presencial de vídeos para produção de conteúdo, <strong>sem custo adicional de deslocamento</strong> nas regiões atendidas:</p>
                </div>
                <div class="sobre-regioes-grid reveal">
                    <div class="sobre-regiao-card">
                        <div class="sobre-regiao-icon">🏙️</div>
                        <h4>Região Metropolitana<br>de Porto Alegre</h4>
                    </div>
                    <div class="sobre-regiao-card">
                        <div class="sobre-regiao-icon">⛰️</div>
                        <h4>Serra Gaúcha</h4>
                    </div>
                    <div class="sobre-regiao-card">
                        <div class="sobre-regiao-icon">🌿</div>
                        <h4>Vale dos Sinos</h4>
                    </div>
                    <div class="sobre-regiao-card">
                        <div class="sobre-regiao-icon">🌾</div>
                        <h4>Vale do Caí</h4>
                    </div>
                    <div class="sobre-regiao-card">
                        <div class="sobre-regiao-icon">🌄</div>
                        <h4>Vale do Taquari</h4>
                    </div>
                </div>
                <div class="sobre-regioes-obs reveal">
                    <p>A disponibilidade pode variar conforme a localização do cliente. Para empresas de outras regiões, também oferecemos <strong>soluções adaptadas para produção remota de conteúdo</strong>. <a href="contato.php" class="sobre-regioes-link">Entre em contato para conhecer as possibilidades →</a></p>
                </div>
            </div>
        </section>

        <!-- FOTOGRAFIA PROFISSIONAL -->
        <section class="section" style="background: var(--white-warm);">
            <div class="container">
                <div class="sobre-foto-grid">
                    <div class="sobre-foto-visual reveal">
                        <div class="sobre-foto-card-main">
                            <div class="sobre-foto-emoji">📸</div>
                            <p class="sobre-foto-label">Produção fotográfica profissional</p>
                        </div>
                        <div class="sobre-foto-badge-float">
                            <span class="sobre-foto-badge-icon">✨</span>
                            <span>Exclusivo para redes sociais</span>
                        </div>
                    </div>
                    <div class="reveal reveal-delay-2">
                        <p class="section-eyebrow">Sessões fotográficas</p>
                        <h2 class="section-title">Produção fotográfica para <em>redes sociais</em></h2>
                        <p class="section-body">Todos os clientes podem contratar sessões fotográficas profissionais voltadas exclusivamente para utilização nas redes sociais.</p>
                        <p class="section-body">As fotos podem ser realizadas em um dia exclusivo ou <strong>integradas à captação de vídeos dos pacotes completos</strong>, oferecendo uma solução prática e alinhada à produção de conteúdo.</p>
                        <a href="contato.php" class="btn btn-outline" style="margin-top: 1rem;">Saiba mais sobre as sessões →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS / GESTÃO QUE VAI ALÉM -->
        <section class="section sobre-gestao-section">
            <div class="container">
                <div class="section-header reveal">
                    <p class="section-eyebrow">Nosso propósito</p>
                    <h2 class="section-title">Gestão que vai além das <em>postagens</em></h2>
                </div>
                <div class="sobre-gestao-grid">
                    <div class="sobre-gestao-card reveal reveal-delay-1">
                        <div class="sobre-gestao-icon">🏆</div>
                        <h4>Posicionamento</h4>
                        <p>Transformamos as redes sociais em uma ferramenta de posicionamento e crescimento para sua marca no mercado veterinário.</p>
                    </div>
                    <div class="sobre-gestao-card reveal reveal-delay-2">
                        <div class="sobre-gestao-icon">🔗</div>
                        <h4>Conexão</h4>
                        <p>Cada conteúdo é planejado para gerar conexão genuína com o público e fortalecer a relação entre tutores e sua clínica.</p>
                    </div>
                    <div class="sobre-gestao-card reveal reveal-delay-3">
                        <div class="sobre-gestao-icon">📊</div>
                        <h4>Autoridade</h4>
                        <p>Fortalecemos sua autoridade no setor com conteúdo estratégico, consistente e que posiciona você como referência.</p>
                    </div>
                    <div class="sobre-gestao-card reveal reveal-delay-1">
                        <div class="sobre-gestao-icon">💬</div>
                        <h4>Comunicação</h4>
                        <p>Tornamos sua comunicação mais profissional, consistente e alinhada à realidade do mercado veterinário.</p>
                    </div>
                </div>
                <blockquote class="sobre-quote reveal">
                    <p>"Nosso objetivo é transformar as redes sociais em uma ferramenta de posicionamento e crescimento para sua marca."</p>
                </blockquote>
            </div>
        </section>

        <!-- NÚMEROS -->
        <!--
        <section class="cta-section">
            <div class="cta-bg"><div class="cta-orb"></div></div>
            <div class="container">
                <div class="cta-content reveal">
                    <p class="section-eyebrow">Nossos números</p>
                    <h2 class="cta-title">Resultados que <em>falam por si</em></h2>
                </div>
                <div class="sobre-numeros-grid">
                    <div class="sobre-numero-item reveal reveal-delay-1">
                        <span class="sobre-numero-val">+200</span>
                        <span class="sobre-numero-label">Clínicas atendidas</span>
                    </div>
                    <div class="sobre-numero-item reveal reveal-delay-2">
                        <span class="sobre-numero-val">8+</span>
                        <span class="sobre-numero-label">Anos de experiência</span>
                    </div>
                    <div class="sobre-numero-item reveal reveal-delay-3">
                        <span class="sobre-numero-val">98%</span>
                        <span class="sobre-numero-label">Satisfação dos clientes</span>
                    </div>
                    <div class="sobre-numero-item reveal reveal-delay-1">
                        <span class="sobre-numero-val">500+</span>
                        <span class="sobre-numero-label">Projetos entregues</span>
                    </div>
                </div>
                <div style="text-align:center; margin-top:3.5rem; position:relative; z-index:2;" class="reveal">
                    <a href="contato.php" class="btn btn-gold btn-large">Quero fazer parte</a>
                </div>
            </div>
        </section>
        -->

        <!-- FOOTER -->
        <?php require_once("includes/rodape.php"); ?>
    </body>
</html>
