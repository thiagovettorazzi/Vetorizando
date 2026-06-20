<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php
        $titulo             = "Contato";
        $meta_category      = "";
        $meta_description   = "";
        
        require_once("includes/head.php");
        ?>
    </head>

    <body>
        <!-- HEADER / NAV -->
        <?php require_once("includes/topo.php"); ?>

        <section class="page-hero">
            <div class="container">
                <p class="page-hero-eyebrow">Vamos conversar</p>
                <h1>Entre em <em>contato</em> conosco</h1>
                <p>Responda nosso formulário e receba uma proposta personalizada para a sua clínica ou hospital veterinário. Retornamos em até 24 horas.</p>
            </div>
        </section>

        <section class="section" style="background: var(--white-warm);">
            <div class="container">
                <div class="contact-grid">
                    <!-- INFO -->
                    <div class="contact-info reveal">
                        <p class="section-eyebrow">Informações</p>
                        <h2 class="section-title" style="font-size:2rem;">Estamos <em>prontos</em> para te atender</h2>
                        <p class="section-body">Escolha o canal de sua preferência ou preencha o formulário ao lado. Nossa equipe especializada em marketing veterinário vai analisar o seu caso e preparar a melhor solução para você.</p>

                        <div class="contact-item" style="margin-top: 2.5rem;">
                            <div class="contact-icon">📞</div>
                            <div>
                                <h4>Telefone / WhatsApp</h4>
                                <p>(51) 99769-9377</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div>
                                <h4>E-mail</h4>
                                <p>contato@vetorizando.com.br</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <h4>Localização</h4>
                                <p>Feliz, RS – Brasil<br>Atendimento em todo o Brasil</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">🕐</div>
                            <div>
                                <h4>Horário de atendimento</h4>
                                <p>Segunda a Sexta: 9h às 18h<br>Sábado: 9h às 13h</p>
                            </div>
                        </div>

                        <div style="margin-top: 2.5rem; padding: 2rem; background: var(--white-deep); border-radius: var(--radius-lg); border-left: 3px solid var(--gold-light);">
                            <p style="font-family:'Cormorant Garamond',serif; font-size:1.25rem; font-style:italic; color:var(--text-dark); line-height:1.5;">"A primeira coisa é falar com nosso atendimento para entender seus objetivos e montar a estratégia ideal para você."</p>
                            <span style="font-size:0.8rem; color:var(--text-light); display:block; margin-top:0.75rem;">— Equipe Vetorizando</span>
                        </div>
                    </div>

                    <!-- FORM -->
                    <div class="contact-form reveal reveal-delay-2">
                        <h3>Solicite sua <em>proposta gratuita</em></h3>
                        <form id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nome">Seu nome</label>
                                    <input type="text" id="nome" name="nome" placeholder="Dr. João Silva" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" name="email" placeholder="joao@clinica.com.br" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="telefone">WhatsApp</label>
                                    <input type="tel" id="telefone" name="telefone" placeholder="(51) 99999-0000">
                                </div>
                                <div class="form-group">
                                    <label for="cidade">Cidade / Estado</label>
                                    <input type="text" id="cidade" name="cidade" placeholder="Feliz, RS">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="clinica">Nome da clínica ou hospital</label>
                                <input type="text" id="clinica" name="clinica" placeholder="Clínica VetVida" required>
                            </div>
                            <div class="form-group">
                                <label for="servico">Serviço de interesse</label>
                                <select id="servico" name="servico">
                                    <option value="">Selecione um serviço...</option>
                                    <option>Gestão de Redes Sociais</option>
                                    <option>Identidade Visual</option>
                                    <option>Tráfego Pago (Google/Meta Ads)</option>
                                    <option>Criação de Site</option>
                                    <option>E-mail Marketing</option>
                                    <option>Pacote Completo</option>
                                    <option>Ainda não sei, quero conhecer as opções</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Como podemos ajudar você?</label>
                                <textarea id="mensagem" name="mensagem" placeholder="Conte um pouco sobre sua clínica e seus objetivos de marketing..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-gold" style="width:100%; justify-content:center; font-size:1rem; padding:1rem;">
                                Enviar mensagem
                            </button>
                            <p style="font-size:0.75rem; color:var(--text-light); text-align:center; margin-top:1rem;">
                                Ao enviar, você concorda com nossa política de privacidade. Não enviamos spam.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="section" style="background: var(--white-pure);">
            <div class="container">
                <div class="section-header reveal">
                    <p class="section-eyebrow">Dúvidas frequentes</p>
                    <h2 class="section-title">Perguntas que <em>costumamos receber</em></h2>
                </div>
                <div style="max-width:800px; margin:0 auto;">
                    <div class="faq-item reveal" style="border-bottom:1px solid var(--white-deep); padding:1.75rem 0;">
                        <h4 style="font-family:'Jost',sans-serif; font-size:1rem; font-weight:600; color:var(--text-dark); margin-bottom:0.75rem;">Quanto tempo leva para ver resultados?</h4>
                        <p style="font-size:0.95rem; color:var(--text-mid); line-height:1.8;">Os primeiros resultados começam a aparecer a partir do 2º mês. Para tráfego pago, resultados podem vir já na primeira semana. Em redes sociais, o crescimento orgânico é progressivo e sustentável.</p>
                    </div>
                    <div class="faq-item reveal" style="border-bottom:1px solid var(--white-deep); padding:1.75rem 0;">
                        <h4 style="font-family:'Jost',sans-serif; font-size:1rem; font-weight:600; color:var(--text-dark); margin-bottom:0.75rem;">A Vetorizando atende fora do Rio Grande do Sul?</h4>
                        <p style="font-size:0.95rem; color:var(--text-mid); line-height:1.8;">Sim! Atendemos clínicas e hospitais veterinários em todo o Brasil. Nosso trabalho é 100% remoto e digital, sem limitação geográfica.</p>
                    </div>
                    <div class="faq-item reveal" style="border-bottom:1px solid var(--white-deep); padding:1.75rem 0;">
                        <h4 style="font-family:'Jost',sans-serif; font-size:1rem; font-weight:600; color:var(--text-dark); margin-bottom:0.75rem;">Como funciona a aprovação do conteúdo?</h4>
                        <p style="font-size:0.95rem; color:var(--text-mid); line-height:1.8;">Todo conteúdo é enviado para aprovação com antecedência. Você tem acesso direto à sua gestora de conta via WhatsApp e pode sugerir ajustes antes de qualquer publicação.</p>
                    </div>
                    <div class="faq-item reveal" style="border-bottom:1px solid var(--white-deep); padding:1.75rem 0;">
                        <h4 style="font-family:'Jost',sans-serif; font-size:1rem; font-weight:600; color:var(--text-dark); margin-bottom:0.75rem;">A agência segue as normas do CFMV?</h4>
                        <p style="font-size:0.95rem; color:var(--text-mid); line-height:1.8;">Absolutamente. Toda a nossa equipe conhece as Resoluções do CFMV que regulamentam a comunicação veterinária. Seu conteúdo sempre estará dentro dos limites éticos da profissão.</p>
                    </div>
                    <div class="faq-item reveal" style="padding:1.75rem 0;">
                        <h4 style="font-family:'Jost',sans-serif; font-size:1rem; font-weight:600; color:var(--text-dark); margin-bottom:0.75rem;">Preciso ter muito tempo disponível para reuniões?</h4>
                        <p style="font-size:0.95rem; color:var(--text-mid); line-height:1.8;">Não. Sabemos que o veterinário tem uma rotina intensa. As comunicações do dia a dia são feitas por WhatsApp e reuniões são agendadas conforme sua disponibilidade, geralmente mensais ou bimestrais.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php require_once("includes/rodape.php"); ?>
    </body>
</html>