<?php
$links = [
    ["principal.php",           "Página inicial",   "", "home",             ""],
    ["viagens.php",             "Viagens",          "", "location_on",      "menu-valida-somente-admin"],
    ["viagens-lote.php",        "Lotes",            "", "playlist_add",     "menu-valida-somente-admin"],
    ["acertos.php",             "Acertos",          "", "calculate",        "menu-valida-somente-admin"],
    ["motoristas-presenca.php", "Descanso",         "", "event_available",  "menu-valida-somente-admin"],
    ["cadastros.php",           "Cadastros",        "", "edit_note",        ""],
    ["manutencoes.php",         "Manutenções",      "", "build",            ""],
    ["relatorios.php",          "Relatórios",       "", "assessment",       "menu-valida-somente-admin"],
    ["usuario-editar.php",      "Perfil",           "", "person",           ""],
    ["javascript:;", "Sair", "sair", "logout", ""]
];

for ($i = 0; $i < count($links); $i++) {
    $isMotoristas = $links[$i][0] === 'motoristas.php';
?>
    <a href="<?= $links[$i][0]; ?>" title="<?= $links[$i][1]; ?>"
        class="menu-links-a color-branco-2 font-size-0875 <?= $links[$i][4]; ?>" id="<?= $links[$i][2]; ?>"
        <?= $isMotoristas ? 'id="menu-link-motoristas"' : '' ?>>
        <span class="menu-links-a-icon material-icon"><?= $links[$i][3]; ?></span>
        <span class="menu-links-a-texto"><?= $links[$i][1]; ?></span>
        <span class="menu-tooltip"><?= $links[$i][1]; ?></span>
    </a>
<?php }  ?>