<style>
    .menu {
        width: 25%; height: 100%; overflow: auto; position: fixed; top: 0; left: 0;
        background:#2b3639; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    }
    .menu-logo { padding: 1.5rem 24px; }
    
    .menu-links { overflow: auto; }
    .menu-links-section {}
    .menu-links-titulo { padding: 1rem 12px .5rem; }
    .menu-links-a { padding: 1rem 24px; display: block; transition: color .25s, background .25s; }
    .menu-links-a + .menu-links-a { border-top:1px solid rgba(255,255,255,.12); }
    .menu-links-a-ativo, .menu-links-a:hover { color: rgba(255,255,255, 1); background: rgba(255,255,255,.08); }

    @media all and (min-width: 1080px) {
        .menu { width: 20%; }
    }
</style>
<style>
    .main { height: 100%; display: flex; }
    .main-wrap {}
    .main-content {}
</style>
<style>
    .conteudo { width: 100%; padding: 1.5rem 24px 1.5rem calc(25% + 24px); }
    .conteudo-wrap { padding: 1.5rem 24px; margin-top: 1.5rem; background: #ffffff; border-radius: 4px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); }
    
    @media all and (min-width: 720px) {
        .conteudo { padding: 2rem 32px 2rem calc(25% + 32px); }
        .conteudo-wrap { padding: 2rem 32px; }
        .conteudo-wrap { margin-top: 2rem; }
    }
    @media all and (min-width: 1080px) {
        .menu { width: 20%; }
        .conteudo { padding: 2rem 32px 2rem calc(20% + 32px); }
    }

    .menu-select { padding: 0 12px; }

    
    .titulo { display: flex; align-items: center; font-size: 1.5rem; line-height: 100%; }
    .titulo-icone { margin-right: 8px; }

    @media all and (min-width: 800px) {
        /* .titulo { font-size: 2rem; line-height: 100%; } */
    }
</style>

<section class="menu">
    <p class="menu-logo color-branco-1 font-size-2">ClubTech</p>

    <div class="menu-select">
        <label class="form">
            <div class="form-label">Estabelecimento</div>
            <select class="form-input form-select" name="menu_estabelecimento" id="menu_estabelecimento" data-min="1"></select>
        </label>
    </div>
    
    <div class="menu-links">
        <?php
        $links = [
            [
                "Principal",
                ["principal.php", "Página inicial", "", ""],
                // ["javascript:;", "Comandas", "", ""],
                // // ["javascript:;", "Relatório saídas", "", ""]
            ],
            // [
                // "Relatórios",
                // ["principal.php", "Página inicial", "", ""],
                // ["javascript:;", "Relatório receitas", "", ""],
                // ["javascript:;", "Relatório saídas", "", ""]
            // ],
            [
                "Produtos",
                ["produtos-categoria.php", "Categorias", "", ""],
                ["produtos.php", "Produtos", "", ""],
                ["comandas.php", "Comandas", "", "menu-valida-pdv"],
            ],
            // [
                // "Preços",
                // ["javascript:;", "Tabelas de preço", "", ""],
                // ["javascript:;", "Produtos", "", ""],
                // ["comandas.php", "Comandas", "", ""],
            // ],
            
            [
                "Caixa",
                ["pagamentos.php", "Tipos de pagamento", "", ""],
            ],

            [
                "Usuário",
                ["usuarios-categoria.php", "Categorias de usuário", "", ""],
                ["usuarios.php", "Usuários", "", "menu-valida-pdv"],
                ["estabelecimentos.php", "Estabelecimentos", "", ""],
                // ["javascript:;", "Permissões", "", ""],
                // ["javascript:;", "Configurações", "", ""],
                ["javascript:;", "Sair", "sair", ""]
            ]
        ];
        
        for ($i = 0; $i < count($links); $i++) {
        ?>
        <div class="menu-links-section">
            <p class="menu-links-titulo color-branco-3 font-size-075"><?=$links[$i][0];?></p>
            <?php
            for ($j = 1; $j < count($links[$i]); $j++) {
            ?>
            <a href="<?=$links[$i][$j][0];?>" title="<?=$links[$i][$j][1];?>" class="menu-links-a color-branco-2 font-size-0875 <?=$links[$i][$j][3];?>" id="<?=$links[$i][$j][2];?>"><?=$links[$i][$j][1];?></a>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>

<script>
    $(function() {
        const $menu_estabelecimento = $("#menu_estabelecimento");
        const pdvs = JSON.parse(localStorage.getItem('pdvs'));
        
        // Verifica se tem PDVs cadastrados
        if (!pdvs.length) {
            $(".menu-select").remove();
            $(".menu-valida-pdv").remove();
        }
        else if (pdvs.length == 1) {
            $(".menu-select").remove();
        }
        else {
            $.each(pdvs, function (_, item) {
                $menu_estabelecimento.append(
                    $("<option>", {
                        value: item.id,
                        text: item.nome
                    })
                );
            });

            $menu_estabelecimento.val(JSON.parse(localStorage.getItem('pdv_selecionado')).id);

            $menu_estabelecimento.change(function() {
                let selecionado = { id: parseInt($menu_estabelecimento.val()), nome: $menu_estabelecimento.find("option:selected").text() };
                console.log(selecionado)
                localStorage.setItem("pdv_selecionado", JSON.stringify(selecionado));
                location.reload();
            });
        }
    });
</script>