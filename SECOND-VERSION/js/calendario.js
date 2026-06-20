// ============================================================
// VETORIZANDO — Calendário Pet Script
// ============================================================

const calendarioDatas = {
    janeiro: [
        { dia: '01', titulo: 'Ano Novo', descricao: 'Início de um novo ano' }
    ],
    fevereiro: [
        { dia: '27', titulo: 'Dia Internacional do Urso Polar', descricao: 'Conscientização sobre a conservação dos ursos polares' }
    ],
    marco: [
        { dia: '03', titulo: 'Dia Mundial da Vida Selvagem', descricao: 'Celebração da fauna e flora selvagens' },
        { dia: '23', titulo: 'Dia Mundial da Meteorologia', descricao: 'Importância da meteorologia para o meio ambiente' }
    ],
    abril: [
        { dia: '07', titulo: 'Dia Mundial da Saúde', descricao: 'Conscientização sobre saúde global' },
        { dia: '22', titulo: 'Dia da Terra', descricao: 'Conscientização ambiental e proteção do planeta' }
    ],
    maio: [
        { dia: '22', titulo: 'Dia Internacional da Biodiversidade', descricao: 'Celebração da diversidade biológica' }
    ],
    junho: [
        { dia: '05', titulo: 'Dia Mundial do Meio Ambiente', descricao: 'Conscientização e ação ambiental' },
        { dia: '08', titulo: 'Dia Mundial dos Oceanos', descricao: 'Proteção e conservação dos oceanos' }
    ],
    julho: [
        { dia: '06', titulo: 'Dia Mundial das Zoonoses', descricao: 'Prevenção de doenças transmitidas por animais' },
        { dia: '29', titulo: 'Dia Internacional do Tigre', descricao: 'Conscientização sobre a conservação dos tigres' }
    ],
    agosto: [
        { dia: '08', titulo: 'Dia Internacional do Gato', descricao: 'Celebração dos felinos domésticos' },
        { dia: '12', titulo: 'Dia Mundial do Elefante', descricao: 'Proteção e conservação dos elefantes' },
        { dia: '26', titulo: 'Dia Internacional do Cachorro', descricao: 'Homenagem aos melhores amigos do homem' }
    ],
    setembro: [
        { dia: '01', titulo: 'Setembro Vermelho', descricao: 'Mês do conscientização e prevenção de doenças cardiovasculares' },
        { dia: '04', titulo: 'Dia Mundial da Vida Selvagem', descricao: 'Proteção da fauna selvagem' },
        { dia: '08', titulo: 'Dia Mundial da Fisioterapia', descricao: 'Importância da fisioterapia veterinária' },
        { dia: '09', titulo: 'Dia do Médico Veterinário', descricao: 'Homenagem aos profissionais da medicina veterinária' },
        { dia: '14', titulo: 'Dia do Cavalo', descricao: 'Celebração dos equinos' },
        { dia: '15', titulo: 'Dia do Cliente', descricao: 'Valorização do relacionamento com clientes' },
        { dia: '19', titulo: 'Dia do Ortopedista', descricao: 'Homenagem aos ortopedistas veterinários' },
        { dia: '25', titulo: 'Dia Mundial do Farmacêutico', descricao: 'Reconhecimento da farmácia veterinária' },
        { dia: '27', titulo: 'Dia Internacional do Coelho', descricao: 'Conscientização sobre cuidados com coelhos' },
        { dia: '29', titulo: 'Dia Mundial do Coração', descricao: 'Prevenção de doenças cardíacas' }
    ],
    outubro: [
        { dia: '04', titulo: 'Dia Mundial dos Animais', descricao: 'Celebração e proteção de todos os animais' },
        { dia: '16', titulo: 'Dia Mundial da Alimentação', descricao: 'Conscientização sobre nutrição adequada' },
        { dia: '31', titulo: 'Halloween Pet', descricao: 'Celebração temática com pets' }
    ],
    novembro: [
        { dia: '01', titulo: 'Dia Mundial do Veganismo', descricao: 'Conscientização sobre alimentação vegana' },
        { dia: '14', titulo: 'Dia Mundial do Diabetes', descricao: 'Prevenção e controle do diabetes em pets' },
        { dia: '27', titulo: 'Dia Nacional de Combate ao Câncer', descricao: 'Conscientização sobre oncologia veterinária' }
    ],
    dezembro: [
        { dia: '01', titulo: 'Dia Mundial de Luta Contra a AIDS', descricao: 'Conscientização sobre doenças imunológicas' },
        { dia: '10', titulo: 'Dia Internacional dos Direitos dos Animais', descricao: 'Defesa dos direitos e bem-estar animal' },
        { dia: '25', titulo: 'Natal', descricao: 'Celebração natalina com os pets' }
    ]
};

$(document).ready(function() {
    
    const $mesesContainer = $('#meses-container');
    const $datasContainer = $('#datas-container');
    const $datasContent = $('#datas-content');
    const $mesSelecionado = $('#mes-selecionado');
    const $btnVoltar = $('#btn-voltar');
    
    $('.mes-card').on('click', function() {
        const mes = $(this).data('mes');
        mostrarDatas(mes);
    });
    
    $btnVoltar.on('click', function() {
        voltarParaMeses();
    });
    
    function mostrarDatas(mes) {
        const datas = calendarioDatas[mes];
        const mesNome = $(`.mes-card[data-mes="${mes}"]`).find('.mes-nome').text();
        
        $mesSelecionado.text(mesNome);
        
        $datasContent.empty();
        
        if (datas && datas.length > 0) {
            datas.forEach(data => {
                const dataItem = `
                    <div class="data-item reveal">
                        <div class="data-dia">
                            <span class="data-dia-numero">${data.dia}</span>
                            <span class="data-dia-mes">${mesNome.substring(0, 3)}</span>
                        </div>
                        <div class="data-info">
                            <div class="data-titulo">${data.titulo}</div>
                            <div class="data-descricao">${data.descricao}</div>
                        </div>
                    </div>
                `;
                $datasContent.append(dataItem);
            });
        } else {
            $datasContent.html(`
                <div class="sem-datas">
                    <div class="sem-datas-icon">📅</div>
                    <p>Nenhuma data comemorativa cadastrada para este mês.</p>
                </div>
            `);
        }
        
        $mesesContainer.fadeOut(300, function() {
            $datasContainer.addClass('show').fadeIn(300);
            
            $('html, body').animate({
                scrollTop: $datasContainer.offset().top - 100
            }, 500);
            
            setTimeout(() => {
                $('.data-item').each(function(index) {
                    setTimeout(() => {
                        $(this).addClass('revealed');
                    }, index * 100);
                });
            }, 100);
        });
    }
    
    function voltarParaMeses() {
        $datasContainer.fadeOut(300, function() {
            $datasContainer.removeClass('show');
            $mesesContainer.fadeIn(300);
            
            $('html, body').animate({
                scrollTop: $mesesContainer.offset().top - 150
            }, 500);
        });
    }
    
    $('.mes-card').each(function(index) {
        setTimeout(() => {
            $(this).addClass('revealed');
        }, index * 50);
    });
});
