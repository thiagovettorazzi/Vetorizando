// ---- Calendar ----
const calDataBackup = {
    1: {
        name: 'Janeiro',
        dates: [
            { day: '01', title: 'Ano Novo', desc: 'Feliz 2025! Campanha de bem-estar animal para o novo ano.' },
            { day: '05', title: 'Dia do Cachorro', desc: 'Celebre os melhores amigos do homem com dicas e conteúdo especial.' },
            { day: '08', title: 'Dia do Gato', desc: 'Uma data especial para os felinos e seus tutores.' },
            { day: '20', title: 'Dia do Hamster', desc: 'Pequenos, mas cheios de personalidade! Conteúdo sobre roedores.' },
        ]
    },
    2: {
        name: 'Fevereiro',
        dates: [
            { day: '03', title: 'Dia do Veterinário (Hemisfério Norte)', desc: 'Celebração internacional da profissão.' },
            { day: '12', title: 'Dia do Peixe Tropical', desc: 'Conteúdo sobre aquarismo e cuidados com peixes.' },
            { day: '14', title: 'Dia dos Namorados (Internacional)', desc: 'Campanha especial com pets e seus tutores.' },
            { day: '20', title: 'Dia do Gato Preto', desc: 'Dia para combater superstições e promover a adoção.' },
        ]
    },
    3: {
        name: 'Março',
        dates: [
            { day: '03', title: 'Dia Mundial da Vida Selvagem', desc: 'Conscientização sobre a preservação de espécies silvestres.' },
            { day: '15', title: 'Dia do Consumidor', desc: 'Promoções e ações para fidelizar tutores de pets.' },
            { day: '20', title: 'Primeiro Dia do Outono', desc: 'Dicas de cuidados sazonais para pets.' },
            { day: '21', title: 'Dia da Água', desc: 'Hidratação e saúde dos animais de estimação.' },
            { day: '22', title: 'Dia Mundial da Água', desc: 'Importância da água fresca para a saúde animal.' },
        ]
    },
    4: {
        name: 'Abril',
        dates: [
            { day: '01', title: 'Dia do Papagaio (Psitacídeos)', desc: 'Conteúdo sobre aves exóticas e seus cuidados.' },
            { day: '04', title: 'Dia Internacional do Rato de Estimação', desc: 'Os roedores merecem amor também!' },
            { day: '11', title: 'Dia Nacional do Cachorro', desc: 'Campanha especial para cães e seus tutores.' },
            { day: '22', title: 'Dia da Terra', desc: 'Conscientização ambiental e bem-estar animal.' },
            { day: '30', title: 'Dia do Combate à Raiva', desc: 'Importância da vacinação antirrábica.' },
        ]
    },
    5: {
        name: 'Maio',
        dates: [
            { day: '03', title: 'Dia Mundial da Liberdade de Imprensa', desc: 'Compartilhe notícias do mundo veterinário.' },
            { day: '10', title: 'Dia das Mães', desc: 'Campanha emocionante com mães pets e filhotes.' },
            { day: '15', title: 'Dia do Professor', desc: 'Valorize os educadores em medicina veterinária.' },
            { day: '22', title: 'Dia da Biodiversidade', desc: 'Conexão entre saúde animal e ecossistemas.' },
            { day: '31', title: 'Dia Mundial sem Tabaco', desc: 'Alerta sobre os efeitos do cigarro nos pets.' },
        ]
    },
    6: {
        name: 'Junho',
        dates: [
            { day: '04', title: 'Dia Internacional do Animal Abandonado', desc: 'Campanha de adoção responsável e conscientização.' },
            { day: '05', title: 'Dia Mundial do Meio Ambiente', desc: 'Saúde animal e preservação ambiental caminham juntas.' },
            { day: '12', title: 'Dia dos Namorados (Brasil)', desc: 'Conteúdo especial com pets e amor.' },
            { day: '21', title: 'Primeiro Dia do Inverno', desc: 'Cuidados com pets no frio: dicas para os tutores.' },
        ]
    },
    7: {
        name: 'Julho',
        dates: [
            { day: '02', title: 'Dia do Zootecnista', desc: 'Reconhecimento e parceria com zootecnistas.' },
            { day: '04', title: 'Dia do Gato (Brasil)', desc: 'Dia especial para felinos brasileiros.' },
            { day: '11', title: 'Dia Mundial da População', desc: 'Reflexão sobre a relação humanos e animais.' },
            { day: '28', title: 'Dia Mundial da Hepatite', desc: 'Doenças hepáticas em animais de companhia.' },
            { day: '29', title: 'Dia Internacional do Tigre', desc: 'Conscientização sobre felinos selvagens.' },
        ]
    },
    8: {
        name: 'Agosto',
        dates: [
            { day: '12', title: 'Dia Internacional do Elefante', desc: 'Conscientização sobre conservação de espécies.' },
            { day: '15', title: 'Dia do Hortifruti', desc: 'Alimentação natural para pets: o que é permitido?' },
            { day: '22', title: 'Dia do Folclore', desc: 'Mitos e verdades sobre animais na cultura brasileira.' },
            { day: '26', title: 'Dia Internacional do Cachorro', desc: 'A maior celebração dos cães no mundo.' },
        ]
    },
    9: {
        name: 'Setembro',
        dates: [
            { day: '01', title: 'Setembro Vermelho', desc: 'Mês de conscientização e prevenção de doenças cardiovasculares.' },
            { day: '08', title: 'Dia Mundial da Fisioterapia', desc: 'Fisioterapia veterinária: recuperação e qualidade de vida.' },
            { day: '09', title: 'Dia do Médico Veterinário', desc: 'Valorize e comemore os profissionais da saúde animal!' },
            { day: '14', title: 'Dia do Cavalo', desc: 'Equinos merecem cuidados especiais e muito amor.' },
            { day: '15', title: 'Dia do Cliente', desc: 'Ações especiais de fidelização para tutores.' },
            { day: '19', title: 'Dia do Ortopedista', desc: 'A ortopedia veterinária garante mobilidade e qualidade de vida.' },
            { day: '25', title: 'Dia Mundial do Farmacêutico', desc: 'A farmacologia veterinária e seu papel no tratamento.' },
            { day: '27', title: 'Dia Internacional do Coelho', desc: 'Coelhos como pets: cuidados e atenção especial.' },
            { day: '29', title: 'Dia Mundial do Coração', desc: 'Cardiologia veterinária: doenças cardíacas em pets.' },
        ]
    },
    10: {
        name: 'Outubro',
        dates: [
            { day: '01', title: 'Dia do Idoso', desc: 'Pets idosos merecem cuidados especiais e geriatria veterinária.' },
            { day: '04', title: 'Dia Mundial dos Animais', desc: 'A maior data do ano para o universo pet!' },
            { day: '15', title: 'Dia do Professor', desc: 'Homenagem aos educadores em medicina veterinária.' },
            { day: '16', title: 'Dia Mundial da Alimentação', desc: 'Nutrição adequada para cães, gatos e outros animais.' },
            { day: '31', title: 'Halloween', desc: 'Fantasia pet-friendly: como proteger os animais na data.' },
        ]
    },
    11: {
        name: 'Novembro',
        dates: [
            { day: '01', title: 'Dia de Todos os Santos', desc: 'Conteúdo reflexivo sobre a conexão entre pets e família.' },
            { day: '05', title: 'Dia do Radiologista', desc: 'Diagnóstico por imagem na medicina veterinária.' },
            { day: '17', title: 'Dia do Pretuberiano (Conscientização Pneumonia)', desc: 'Doenças respiratórias em animais.' },
            { day: '20', title: 'Dia da Consciência Negra', desc: 'Diversidade e inclusão no mundo veterinário.' },
            { day: '25', title: 'Dia Internacional contra Violência Animal', desc: 'Campanha de proteção e bem-estar animal.' },
        ]
    },
    12: {
        name: 'Dezembro',
        dates: [
            { day: '01', title: 'Dia Mundial de Combate à AIDS', desc: 'Doenças virais em animais domésticos: FIV e FeLV.' },
            { day: '04', title: 'Dia de Santa Bárbara / Dia do Gato (SP)', desc: 'Celebração felina no estado de São Paulo.' },
            { day: '10', title: 'Dia dos Direitos Humanos', desc: 'Reflexão sobre a proteção e direitos dos animais.' },
            { day: '25', title: 'Natal', desc: 'Cuidados especiais com pets durante as festas de fim de ano.' },
            { day: '31', title: 'Réveillon', desc: 'Como proteger seus pets dos fogos de artifício.' },
        ]
    }
};

const calData = {
    1: {
        name: 'Janeiro Branco – Conscientização da saúde de filhotes e saúde mental dos pets',
        dates: [
            { day: '16', title: 'Dia do Fisiatra Veterinário' },
            { day: '20', title: 'Dia do Farmacêutico' }
        ]
    },
    2: {
        name: 'Fevereiro Roxo – Conscientização do cuidado com pets idosos e doenças neurodegenerativas',
        dates: [
            { day: '04', title: 'Dia Mundial do Combate ao Câncer' },
            { day: '17', title: 'Dia Mundial do Gato' },
            { day: '21', title: 'Dia Mundial da Baleia' }
        ]
    },
    3: {
        name: 'Março Azul-Marinho – Prevenção de doenças gastrointestinais e verminoses',
        dates: [
            { day: '01', title: 'Dia Internacional do Porco' },
            { day: '03', title: 'Dia Mundial da Vida Selvagem' },
            { day: '08', title: 'Dia Internacional da Mulher' },
            { day: '08', title: 'Dia do Médico Nefrologista' },
            { day: '11', title: 'Dia Mundial do Rim' },
            { day: '14', title: 'Dia dos Animais' },
            { day: '14', title: 'Dia do Auxiliar Veterinário' },
            { day: '16', title: 'Dia Internacional do Cavalo' },
            { day: '16', title: 'Dia do Dermatologista Veterinário' },
            { day: '20', title: 'Dia Internacional da Felicidade' }
        ]
    },
    4: {
        name: 'Abril Laranja – Prevenção da Crueldade Animal',
        dates: [
            { day: '04', title: 'Dia Mundial dos Animais de Rua' },
            { day: '04', title: 'Dia Mundial do Rato' },
            { day: '10', title: 'Dia Mundial da Homeopatia' },
            { day: 'Último sábado', title: 'Dia Mundial da Medicina Veterinária' },
            { day: '27', title: 'Dia Internacional da Conservação dos Anfíbios' }
        ]
    },
    5: {
        name: 'Maio Amarelo – Conscientização da Saúde Renal e Oral',
        dates: [
            { day: '01', title: 'Dia do Trabalhador' },
            { day: '07', title: 'Dia do Oftalmologista' },
            { day: 'Segundo domingo', title: 'Dia das Mães' },
            { day: '13', title: 'Dia do Zootecnista' },
            { day: '15', title: 'Dia Internacional da Família' },
            { day: '22', title: 'Dia do Abraço' },
            { day: '23', title: 'Dia Mundial da Tartaruga' },
            { day: '26', title: 'Dia do Combate ao Glaucoma' }
        ]
    },
    6: {
        name: 'Junho Violeta – Prevenção de doenças oculares e dermatológicas',
        dates: [
            { day: '05', title: 'Dia Mundial do Meio Ambiente e da Ecologia' },
            { day: '09', title: 'Dia da Imunização' },
            { day: '15', title: 'Dia do Patologista Veterinário' }
        ]
    },
    7: {
        name: 'Julho Dourado da Vacinação Animal – Conscientização sobre doenças graves e zoonoses',
        dates: [
            { day: '06', title: 'Dia Mundial do Combate às Zoonoses' },
            { day: '08', title: 'Dia da Ciência e do Pesquisador Científico' },
            { day: '10', title: 'Dia Mundial da Saúde Ocular' },
            { day: '16', title: 'Dia Internacional do Porquinho-da-Índia' },
            { day: '20', title: 'Dia Internacional da Amizade / Dia do Amigo' },
            { day: '26', title: 'Dia do Recepcionista' },
            { day: '26', title: 'Dia do Tosador' },
            { day: '31', title: 'Dia do Vira-Lata' }
        ]
    },
    8: {
        name: 'Agosto Verde Claro – Conscientização sobre Leishmaniose, PIF, FIV e FELV',
        dates: [
            { day: '08', title: 'Dia Internacional do Gato' },
            { day: 'Segundo domingo', title: 'Dia dos Pais' },
            { day: '10', title: 'Dia do Protetor dos Animais' },
            { day: '14', title: 'Dia do Cardiologista' },
            { day: 'Terceiro sábado', title: 'Dia Internacional do Animal Abandonado' },
            { day: '21', title: 'Dia do Ultrassonografista' },
            { day: '26', title: 'Dia Mundial do Cão' },
            { day: '30', title: 'Dia do Oftalmologista Veterinário' }
        ]
    },
    9: {
        name: 'Setembro Vermelho – Prevenção de Doenças Cardiovasculares',
        dates: [
            { day: '08', title: 'Dia Mundial da Fisioterapia' },
            { day: '09', title: 'Dia do Médico Veterinário' },
            { day: '14', title: 'Dia do Cavalo' },
            { day: '14', title: 'Dia da Capivara' },
            { day: '15', title: 'Dia do Cliente' },
            { day: '19', title: 'Dia do Ortopedista' },
            { day: '25', title: 'Dia Mundial do Farmacêutico' },
            { day: 'Último sábado', title: 'Dia Internacional do Coelho' },
            { day: '28', title: 'Dia Mundial da Luta Contra a Raiva' },
            { day: '29', title: 'Dia Mundial do Coração' }
        ]
    },
    10: {
        name: 'Outubro Rosa – Prevenção do câncer de mama e de doenças frequentes em fêmeas',
        dates: [
            { day: '01', title: 'Dia do Cão Idoso' },
            { day: '04', title: 'Dia Mundial dos Animais' },
            { day: '04', title: 'Dia de São Francisco de Assis' },
            { day: '04', title: 'Dia do Cão' },
            { day: '04', title: 'Dia da Natureza' },
            { day: '04', title: 'Dia da Adoção Animal' },
            { day: '05', title: 'Dia Mundial das Aves' },
            { day: '05', title: 'Dia do Pet Sitter' },
            { day: '12', title: 'Dia das Crianças' },
            { day: '12', title: 'Dia dos Filhotes' },
            { day: '12', title: 'Dia do Mar' },
            { day: '13', title: 'Dia do Fisioterapeuta' },
            { day: '16', title: 'Dia do Anestesiologista' },
            { day: '21', title: 'Dia Mundial dos Répteis' },
            { day: '27', title: 'Dia da Conscientização pelo Gato Preto' }
        ]
    },
    11: {
        name: 'Novembro Azul – Prevenção do câncer de próstata e outras neoplasias',
        dates: [
            { day: '05', title: 'Dia do Adestrador' },
            { day: '14', title: 'Dia Mundial de Combate à Diabetes' },
            { day: '17', title: 'Dia do Gato Preto' },
            { day: '25', title: 'Dia do Doador de Sangue' }
        ]
    },
    12: {
        name: 'Dezembro Verde – Combate ao Abandono Animal',
        dates: [
            { day: '05', title: 'Dia Internacional do Voluntariado' },
            { day: '10', title: 'Dia Internacional dos Direitos dos Animais' },
            { day: '24', title: 'Natal' },
            { day: '31', title: 'Ano Novo' }
        ]
    }
};

function initCalendar() {
    const monthBtns = document.querySelectorAll('.month-btn');
    const panel = document.getElementById('monthPanel');
    if (!monthBtns.length || !panel) return;

    monthBtns.forEach(btn => {
        const m = parseInt(btn.dataset.month);
        
        // Preenche a quantidade de datas dinamicamente
        const data = calData[m];
        if (data && data.dates) {
            const count = data.dates.length;
            const countSpan = btn.querySelector('.month-count');
            if (countSpan) {
                countSpan.textContent = count + (count === 1 ? ' data' : ' datas');
            }
        }

        btn.addEventListener('click', () => {
            const m = parseInt(btn.dataset.month);
            monthBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const data = calData[m];
            if (!data) return;

            const list = data.dates.map(d => {
                let dayFormatted = d.day;
                if (!isNaN(parseInt(d.day)) && d.day.length <= 2) {
                    dayFormatted = `${String(parseInt(d.day)).padStart(2,'0')}/${String(m).padStart(2,'0')}`;
                } else if (d.day.includes('º')) {
                    dayFormatted = `${d.day.replace('º','').padStart(2,'0')}/${String(m).padStart(2,'0')}`;
                }

                return `
                <div class="date-item">
                    <span class="date-tag">${dayFormatted}</span>
                    <div class="date-info">
                        <strong>${d.title}</strong>
                        ${d.desc ? `<span>${d.desc}</span>` : ''}
                    </div>
                </div>
                `;
            }).join('');

            panel.innerHTML = `
                <h3>${data.name}</h3>
                <div class="dates-list">${list}</div>
            `;
            panel.classList.add('visible');
            setTimeout(() => panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 100);
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initCalendar();
});
