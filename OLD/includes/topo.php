
<style>
    .header { background: #ffffff; box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.15); }
    .header-wrap { width: 100%; padding: 0 8px; }
    
    .header-logo { width: 120px; margin: 1rem 16px; display: block; float: left; }
    .header-button { padding: 1rem 16px; margin: 1rem 0; float: right; }
    .header-button::after { content: "menu"; }
    .header-button-ativo::after { content: "close"; }

    .header-nav { padding: .5rem 0; border-top: 1px solid rgba(0,0,0,.12); display: none; clear: left; }
    .header-nav-ativo { display: block; }
    .header-nav-a { padding: .5rem 16px; display: block; color: rgba(0,0,0,.54); text-align: center; transition: color .25s, border .25s; }
    .header-nav-a:hover { color: rgba(0,0,0,.87); }
    
    .header-whatsapp {}
    
    @media all and (min-width: 768px) {
        .header-wrap { max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; }

        .header-button { display: none; }

        .header-nav { padding: 0; border: none; display: flex; }
        .header-nav-a { padding: 36px 16px 34px; border-bottom: 2px solid #ffffff; }
        .header-nav-a-ativo { border-color: #000; color: rgba(0,0,0,.87); }
    }
</style>

<header class="header">
    <div class="header-wrap">
        <a href="" title="Vetorizando" class="header-logo">
            <img src="img/header-logo.png" alt="Vetorizando" width="100%">
        </a>

        <button type="button" class="header-button material-icon-after" id="header-button"></button>

        <div class="header-nav header-nav-ativo" id="header-nav">
            <?php
            $links = [
                ["",                        "Agência"],
                ["identidade-visual.php",   "Identidade visual"],
                ["gestao-de-marketing.php", "Gestão de marketing"],
                ["calendario.php",          "Calendário"],
                ["contato.php",             "Contato"]
            ];
            
            for ($i = 0; $i < count($links); $i++) {
            ?>
            <a href="<?=$links[$i][0];?>" title="<?=$links[$i][1];?>" class="header-nav-a"><?=$links[$i][1];?></a>
            <?php } ?>
        </div>
    </div>
</header>

<script>
    $(function() {
        const $header_button = $("#header-button");
        const $header_nav = $("#header-nav");

        $header_button.click(function(){
            if ($header_button.hasClass("header-button-ativo")) {
                $header_button.removeClass("header-button-ativo");
                $header_nav.removeClass("header-nav-ativo");
            }
            else {
                $header_button.addClass("header-button-ativo");
                $header_nav.addClass("header-nav-ativo");
            }
        });
    });
</script>