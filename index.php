<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        $titulo             = "Home";
        $meta_category      = "";
        $meta_description   = "";
        
        require_once("includes/head.php");
        ?>
    </head>

    <body>
        <!-- HEADER / NAV -->
        <?php require_once("includes/topo.php"); ?>

        <!-- HERO -->
        <section class="hero">
            <div class="hero-bg">
                <div class="hero-orb hero-orb-1"></div>
                <div class="hero-orb hero-orb-2"></div>
                <div class="hero-line hero-line-1"></div>
                <div class="hero-line hero-line-2"></div>
            </div>
            <div class="hero-content">
                <p class="hero-eyebrow">Agência Especializada em</p>
                <h1 class="hero-title">Marketing<br><em>Veterinário</em></h1>
                <p class="hero-subtitle">Transformamos clínicas e hospitais veterinários em marcas de referência. Estratégia, design e presença digital de alto nível.</p>
                <div class="hero-actions">
                    <a href="contato.php" class="btn btn-gold">Quero crescer agora</a>
                    <a href="servicos.php" class="btn btn-outline">Ver serviços</a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-num">+200</span>
                        <span class="stat-label">Clínicas atendidas</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat">
                        <span class="stat-num">8+</span>
                        <span class="stat-label">Anos de experiência</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat">
                        <span class="stat-num">100%</span>
                        <span class="stat-label">Foco veterinário</span>
                    </div>
                </div>
            </div>
            <div class="hero-scroll">
                <span>role para baixo</span>
                <div class="scroll-line"></div>
            </div>
        </section>

        <!-- INTRO STRIP -->
        <section class="intro-strip">
            <div class="strip-inner">
                <span>Marketing Veterinário</span>
                <span class="dot">✦</span>
                <span>Gestão de Redes Sociais</span>
                <span class="dot">✦</span>
                <span>Identidade Visual</span>
                <span class="dot">✦</span>
                <span>Tráfego Pago</span>
                <span class="dot">✦</span>
                <span>Criação de Sites</span>
                <span class="dot">✦</span>
                <span>Calendário Pet</span>
                <span class="dot">✦</span>
            </div>
        </section>

        <!-- SOBRE RESUMO -->
        <section class="about-preview section">
            <div class="container">
                <div class="about-grid">
                    <div class="about-visual">
                        <div class="about-card-main">
                            <div class="about-card-inner">
                                <div class="about-icon">🐾</div>
                                <p class="about-card-text">Somos uma agência 100% dedicada ao universo da medicina veterinária</p>
                            </div>
                            <div class="about-badge">Desde 2016</div>
                        </div>
                        <div class="about-card-float">
                            <span class="float-num">98%</span>
                            <span class="float-text">de satisfação dos clientes</span>
                        </div>
                    </div>
                    <div class="about-text">
                        <p class="section-eyebrow">Quem somos</p>
                        <h2 class="section-title">Uma agência que <em>fala a língua</em> do veterinário</h2>
                        <p class="section-body">Na Vetorizando, entendemos as regulamentações do CFMV, o ciclo de consultas e a linguagem dos tutores. Não somos uma agência genérica — somos especialistas no nicho veterinário.</p>
                        <p class="section-body">Nossa equipe multidisciplinar reúne veterinários, designers, especialistas em marketing e desenvolvedores web com um único objetivo: fazer sua clínica crescer de forma sustentável e ética.</p>
                        <a href="sobre.php" class="btn btn-gold-outline">Conhecer a equipe</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVIÇOS -->
        <section class="services section" id="servicos">
            <div class="container">
                <div class="section-header">
                    <p class="section-eyebrow">O que fazemos</p>
                    <h2 class="section-title">Serviços completos para <em>sua clínica brilhar</em></h2>
                </div>
                <div class="services-grid">
                    <a href="servicos.php#redes" class="service-card">
                        <div class="service-icon">📱</div>
                        <h3>Gestão de Redes Sociais</h3>
                        <p>Criamos conteúdo estratégico e gerenciamos suas redes de A a Z, fortalecendo sua presença digital.</p>
                        <span class="service-link">Saiba mais →</span>
                    </a>
                    <a href="servicos.php#identidade" class="service-card">
                        <div class="service-icon">🎨</div>
                        <h3>Identidade Visual</h3>
                        <p>Logos, paletas de cores e guias de estilo que refletem a essência da sua clínica ou hospital.</p>
                        <span class="service-link">Saiba mais →</span>
                    </a>
                    <a href="servicos.php#trafego" class="service-card">
                        <div class="service-icon">📊</div>
                        <h3>Tráfego Pago</h3>
                        <p>Campanhas no Google e Meta Ads direcionadas ao público certo: tutores da sua região.</p>
                        <span class="service-link">Saiba mais →</span>
                    </a>
                    <a href="servicos.php#sites" class="service-card">
                        <div class="service-icon">💻</div>
                        <h3>Criação de Sites</h3>
                        <p>Sites responsivos, rápidos e otimizados para SEO, que convertem visitantes em clientes.</p>
                        <span class="service-link">Saiba mais →</span>
                    </a>
                    <a href="servicos.php#email" class="service-card">
                        <div class="service-icon">✉️</div>
                        <h3>E-mail Marketing</h3>
                        <p>Campanhas segmentadas que mantêm o vínculo com seus tutores entre as consultas.</p>
                        <span class="service-link">Saiba mais →</span>
                    </a>
                    <a href="calendario.php" class="service-card service-card-highlight">
                        <div class="service-icon">📅</div>
                        <h3>Calendário Pet</h3>
                        <p>Todas as datas comemorativas do universo animal para planejar seu conteúdo com antecedência.</p>
                        <span class="service-link">Ver calendário →</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAIS -->
        <section class="differentials section">
            <div class="container">
                <div class="diff-grid">
                    <div class="diff-text">
                        <p class="section-eyebrow">Por que nos escolher</p>
                        <h2 class="section-title">Marketing que respeita a <em>ética veterinária</em></h2>
                        <p class="section-body">A publicidade veterinária tem regras rígidas. Nossa equipe conhece e respeita todas as resoluções do CFMV, garantindo que sua comunicação seja sempre ética e eficaz.</p>
                        <ul class="diff-list">
                            <li><span class="diff-check">✦</span> Resolução CFMV nº 1138/2016</li>
                            <li><span class="diff-check">✦</span> Resolução CFMV nº 1321/2020</li>
                            <li><span class="diff-check">✦</span> Conteúdo revisado por veterinários</li>
                            <li><span class="diff-check">✦</span> Estratégia de longo prazo</li>
                        </ul>
                        <a href="sobre.php" class="btn btn-gold">Saber mais</a>
                    </div>
                    <div class="diff-visual">
                        <div class="diff-card diff-card-1">
                            <span class="diff-card-icon">🏆</span>
                            <span>Especialistas no nicho</span>
                        </div>
                        <div class="diff-card diff-card-2">
                            <span class="diff-card-icon">🔒</span>
                            <span>100% dentro das normas</span>
                        </div>
                        <div class="diff-card diff-card-3">
                            <span class="diff-card-icon">📈</span>
                            <span>Resultados mensuráveis</span>
                        </div>
                        <div class="diff-card diff-card-4">
                            <span class="diff-card-icon">💬</span>
                            <span>Suporte dedicado</span>
                        </div>
                        <div class="diff-orb"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DEPOIMENTOS -->
        <section class="testimonials section">
            <div class="container">
                <div class="section-header">
                    <p class="section-eyebrow">Depoimentos</p>
                    <h2 class="section-title">O que nossos clientes <em>dizem sobre nós</em></h2>
                </div>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p>"A Vetorizando transformou completamente nossa presença digital. Em 3 meses, dobramos o número de novos tutores entrando em contato."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">DR</div>
                            <div>
                                <strong>Dra. Renata Alves</strong>
                                <span>Clínica VetVida – Feliz, RS</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card testimonial-card-featured">
                        <div class="testimonial-stars">★★★★★</div>
                        <p>"Finalmente uma agência que entende que somos veterinários, não só empresários. O conteúdo é correto, ético e funciona de verdade."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">MC</div>
                            <div>
                                <strong>Dr. Marcos Costa</strong>
                                <span>Hospital PetCare – Rio de Janeiro, RJ</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">★★★★★</div>
                        <p>"O site que criaram para nós é lindo e funciona muito bem no celular. Recebemos elogios dos clientes sobre ele toda semana."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">LA</div>
                            <div>
                                <strong>Dra. Luana Andrade</strong>
                                <span>Clínica Amigão – Curitiba, PR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="cta-section">
            <div class="cta-bg">
                <div class="cta-orb"></div>
            </div>
            <div class="container">
                <div class="cta-content">
                    <p class="section-eyebrow">Pronto para crescer?</p>
                    <h2 class="cta-title">Vamos construir a presença digital da sua clínica <em>juntos</em></h2>
                    <p class="cta-subtitle">Entre em contato e receba uma proposta personalizada para sua clínica ou hospital veterinário.</p>
                    <a href="contato.php" class="btn btn-gold btn-large">Falar com um especialista</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php require_once("includes/rodape.php"); ?>
    </body>
</html>