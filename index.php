<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        $titulo             = "Vetorizando - Agência de Marketing Veterinário";
        $meta_category      = "Marketing";
        $meta_description   = "Marketing veterinário com estratégia, conhecimento e resultados. A Vetorizando une o conhecimento técnico da medicina veterinária com a expertise em comunicação estratégica.";
        
        require_once("includes/head.php");
        ?>
    </head>

    <body class="page-home">
        <!-- HEADER / NAV -->
        <?php require_once("includes/topo.php"); ?>

        <!-- HERO SLIDER -->
        <section class="home-hero">
            <div class="home-slider">
                <div class="slide slide-1 active"></div>
                <div class="slide slide-2"></div>
                <div class="slide slide-3"></div>
                <div class="slider-overlay"></div>
            </div>
            
            <div class="container home-hero-content">
                <div class="hero-text-wrapper reveal">
                    <p class="hero-eyebrow">Bem-vindo à Vetorizando</p>
                    <h1 class="hero-title">Marketing veterinário com <em>estratégia, conhecimento</em> e resultados</h1>
                    <div class="hero-actions">
                        <a href="outras-solucoes.php" class="btn btn-gold btn-large">Conheça Nossas Soluções</a>
                        <a href="contato.php" class="btn btn-outline btn-large">Fale com a Equipe</a>
                    </div>
                </div>
            </div>
            
            <div class="hero-scroll">
                <span>role para descobrir</span>
                <div class="scroll-line"></div>
            </div>
        </section>

        <!-- A VETORIZANDO -->
        <section class="home-about section">
            <div class="home-about-bg"></div>
            <div class="container">
                <div class="home-about-grid">
                    <div class="home-about-text reveal">
                        <p class="section-eyebrow">A Vetorizando</p>
                        <h2 class="section-title">Comunicação profissional que gera <em>autoridade e conexão real</em></h2>
                        <p class="section-body">A Vetorizando nasceu para atender uma necessidade cada vez mais presente no mercado veterinário: comunicar com profissionalismo, gerar autoridade e criar conexões reais com os clientes.</p>
                        
                        <div class="founder-card">
                            <div class="founder-icon">👩‍⚕️</div>
                            <div>
                                <strong>Fundada por Nicole Felippe</strong>
                                <p>Médica veterinária, especialista em diagnóstico por imagem e profissional da área de publicidade e marketing há mais de 8 anos.</p>
                            </div>
                        </div>
                        
                        <p class="section-body">A Vetorizando une dois mundos essenciais para o sucesso de clínicas, hospitais veterinários e profissionais da área: o conhecimento técnico da medicina veterinária e a expertise em comunicação estratégica.</p>
                        <p class="section-body">Mais do que criar postagens, desenvolvemos posicionamento, identidade e presença digital para que sua marca seja reconhecida, lembrada e valorizada.</p>
                        <p class="section-body">Trabalhamos com soluções personalizadas para médicos-veterinários, clínicas, hospitais e empresas do setor pet, respeitando a realidade, os objetivos e o momento de cada negócio.</p>
                        
                        <a href="sobre.php" class="btn btn-gold-outline" style="margin-top: 1rem;">Conheça nossa história</a>
                    </div>
                    
                    <div class="home-about-visual reveal reveal-delay-1">
                        <div class="home-about-card-stack">
                            <div class="ha-card ha-card-1">
                                <span class="ha-icon">🏥</span>
                                <span>Clínicas & Hospitais</span>
                            </div>
                            <div class="ha-card ha-card-2">
                                <span class="ha-icon">🩺</span>
                                <span>Especialistas</span>
                            </div>
                            <div class="ha-card ha-card-3">
                                <span class="ha-icon">🐕</span>
                                <span>Mercado Pet</span>
                            </div>
                            <div class="ha-badge">Estratégia + Veterinária</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- O QUE FAZEMOS -->
        <section class="home-services section" id="servicos">
            <div class="container">
                <div class="section-header text-center reveal">
                    <p class="section-eyebrow">O que fazemos</p>
                    <h2 class="section-title">Soluções <em>completas e estratégicas</em></h2>
                    <p class="section-subtitle">Tudo o que a sua clínica ou hospital precisa para se destacar no mercado digital e atrair os tutores certos.</p>
                </div>
                
                <div class="home-services-grid">
                    <!-- Servico 1 -->
                    <div class="home-service-card reveal">
                        <div class="hs-icon">📱</div>
                        <h3>Gestão estratégica de redes sociais</h3>
                        <a href="outras-solucoes.php" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 2 -->
                    <div class="home-service-card reveal reveal-delay-1">
                        <div class="hs-icon">🎨</div>
                        <h3>Identidade visual e posicionamento de marca</h3>
                        <a href="identidades-visuais.php" class="hs-link">Ver portfólio →</a>
                    </div>
                    <!-- Servico 3 -->
                    <div class="home-service-card reveal reveal-delay-2">
                        <div class="hs-icon">📸</div>
                        <h3>Produção e captação de conteúdo</h3>
                        <a href="outras-solucoes.php#fotografia" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 4 -->
                    <div class="home-service-card reveal">
                        <div class="hs-icon">📅</div>
                        <h3>Planejamento de conteúdo</h3>
                        <a href="calendario.php" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 5 -->
                    <div class="home-service-card reveal reveal-delay-1">
                        <div class="hs-icon">🖨️</div>
                        <h3>Desenvolvimento de materiais gráficos</h3>
                        <a href="identidades-visuais.php" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 6 -->
                    <div class="home-service-card reveal reveal-delay-2">
                        <div class="hs-icon">💻</div>
                        <h3>Criação de sites</h3>
                        <a href="outras-solucoes.php" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 7 -->
                    <div class="home-service-card reveal">
                        <div class="hs-icon">🎯</div>
                        <h3>Tráfego pago</h3>
                        <a href="outras-solucoes.php" class="hs-link">Saber mais →</a>
                    </div>
                    <!-- Servico 8 -->
                    <div class="home-service-card reveal reveal-delay-1">
                        <div class="hs-icon">✨</div>
                        <h3>Conteúdo para Instagram e outras plataformas</h3>
                        <a href="outras-solucoes.php" class="hs-link">Saber mais →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- DIFERENCIAL -->
        <section class="home-diff section">
            <div class="home-diff-bg">
                <div class="home-diff-orb"></div>
            </div>
            <div class="container relative">
                <div class="home-diff-content reveal">
                    <div class="diff-badge">O nosso diferencial</div>
                    <h2 class="diff-title">Enquanto muitas agências precisam aprender sobre veterinária para comunicar o seu negócio...<br><em>Nós já fazemos parte desse mercado.</em></h2>
                    
                    <div class="diff-text-box">
                        <p>Conhecemos a rotina clínica, a linguagem técnica, as dúvidas dos tutores e os desafios de posicionamento enfrentados pelos profissionais veterinários.</p>
                        <p>Isso permite criar estratégias mais assertivas, conteúdos mais relevantes e uma comunicação verdadeiramente alinhada ao seu público.</p>
                    </div>
                    
                    <div class="diff-checks">
                        <div class="diff-check-item">
                            <span class="dc-icon">✓</span>
                            <span>Linguagem técnica correta</span>
                        </div>
                        <div class="diff-check-item">
                            <span class="dc-icon">✓</span>
                            <span>Estratégias assertivas</span>
                        </div>
                        <div class="diff-check-item">
                            <span class="dc-icon">✓</span>
                            <span>Conteúdo relevante</span>
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
                <div class="cta-content reveal">
                    <p class="section-eyebrow">Eleve o nível da sua clínica</p>
                    <h2 class="cta-title">Vamos construir a presença digital que <em>sua marca merece</em></h2>
                    <p class="cta-subtitle">Entre em contato e receba uma proposta personalizada para seus objetivos.</p>
                    <a href="contato.php" class="btn btn-gold btn-large">Falar com um especialista</a>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php require_once("includes/rodape.php"); ?>
    </body>
</html>