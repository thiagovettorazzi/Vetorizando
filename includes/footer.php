    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Vetorizando</h3>
                    <p>Marketing veterinário com estratégia, conhecimento e resultados.</p>
                    <p>Fundada por Nicole Felippe, médica veterinária e especialista em marketing.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Serviços</h3>
                    <div class="footer-links">
                        <a href="/gerenciamento-redes-sociais" class="footer-link">Gerenciamento de Redes Sociais</a>
                        <a href="/identidades-visuais" class="footer-link">Identidades Visuais</a>
                        <a href="/outros-servicos" class="footer-link">Criação de Sites</a>
                        <a href="/outros-servicos" class="footer-link">Tráfego Pago</a>
                        <a href="/calendario-pet" class="footer-link">Calendário Pet</a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Navegação</h3>
                    <div class="footer-links">
                        <a href="/" class="footer-link">Home</a>
                        <a href="/sobre" class="footer-link">Sobre a Empresa</a>
                        <a href="/outros-servicos" class="footer-link">Outros Serviços</a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Contato</h3>
                    <div class="footer-links">
                        <a href="mailto:contato@vetorizando.com.br" class="footer-link">contato@vetorizando.com.br</a>
                        <a href="https://wa.me/5551999999999" class="footer-link" target="_blank">WhatsApp</a>
                        <a href="https://instagram.com/vetorizando" class="footer-link" target="_blank">Instagram</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Vetorizando - Marketing Veterinário. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>
    <?php if(isset($extra_js)): ?>
        <script src="<?php echo $extra_js; ?>"></script>
    <?php endif; ?>
</body>
</html>
