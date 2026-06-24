// ============================================================
// VETORIZANDO — Main Script
// ============================================================

// ---- Header scroll effect ----
const header = document.getElementById('header');
if (header) {
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 40);
    });
}

// ---- Mobile menu ----
const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');
if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
        nav.classList.toggle('open');
        hamburger.classList.toggle('open');
    });
    nav.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('open');
            hamburger.classList.remove('open');
        });
    });
    document.addEventListener('click', (e) => {
        if (!hamburger.contains(e.target) && !nav.contains(e.target)) {
            nav.classList.remove('open');
            hamburger.classList.remove('open');
        }
    });
}

// ---- Scroll reveal ----
const revealEls = document.querySelectorAll('.reveal');
if (revealEls.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
    revealEls.forEach(el => observer.observe(el));
}

// ---- Calendar ----
const calData = {
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

function initCalendar() {
    const monthBtns = document.querySelectorAll('.month-btn');
    const panel = document.getElementById('monthPanel');
    if (!monthBtns.length || !panel) return;

    monthBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const m = parseInt(btn.dataset.month);
            monthBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const data = calData[m];
            if (!data) return;

            const list = data.dates.map(d => `
                <div class="date-item">
                    <span class="date-tag">${d.day}/${String(m).padStart(2,'0')}</span>
                    <div class="date-info">
                        <strong>${d.title}</strong>
                        <span>${d.desc}</span>
                    </div>
                </div>
            `).join('');

            panel.innerHTML = `
                <h3>${data.name} — Datas Comemorativas</h3>
                <div class="dates-list">${list}</div>
            `;
            panel.classList.add('visible');
            setTimeout(() => panel.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 100);
        });
    });
}

// ---- Contact form ----
function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('button[type=submit]');
        btn.textContent = 'Mensagem enviada! ✓';
        btn.style.background = 'linear-gradient(135deg, #4CAF50, #388E3C)';
        setTimeout(() => {
            btn.textContent = 'Enviar mensagem';
            btn.style.background = '';
            form.reset();
        }, 3500);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    initCalendar();
    initContactForm();
});
