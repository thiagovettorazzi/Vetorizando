# Vetorizando - Marketing Veterinário

Site profissional e responsivo para a Vetorizando, agência especializada em marketing veterinário.

## 🎨 Design

- **Paleta de cores:** 2 tons de dourado (#D4AF37, #B8860B) e 2 tons de branco (#FFFFFF, #F5F5F5)
- **Efeitos:** Gradientes, animações suaves, hover effects
- **Responsivo:** Totalmente adaptável para mobile, tablet e desktop

## 📁 Estrutura do Projeto

```
Vetorizando/
├── index.php                 # Página inicial
├── sobre.php                 # Sobre a empresa
├── gerenciamento.php         # Gerenciamento de Redes Sociais
├── identidades.php           # Identidades Visuais
├── outros-servicos.php       # Outros Serviços
├── calendario.php            # Calendário Pet
├── 404.php                   # Página de erro 404
├── .htaccess                 # Configuração de URLs amigáveis
├── css/
│   ├── style.css            # Estilos principais
│   └── calendario.css       # Estilos do calendário
├── js/
│   ├── script.js            # JavaScript principal
│   └── calendario.js        # JavaScript do calendário
├── includes/
│   ├── header.php           # Header reutilizável
│   └── footer.php           # Footer reutilizável
└── img/                     # Imagens do site
```

## 🚀 Tecnologias Utilizadas

- **PHP** - Backend e estrutura de páginas
- **HTML5** - Marcação semântica
- **CSS3** - Estilização moderna com variáveis CSS
- **jQuery** - Manipulação DOM e efeitos
- **JavaScript** - Funcionalidades interativas

## 📄 Páginas

### 1. Home (index.php)
- Hero section com apresentação
- Seção "Quem Somos"
- Grid de serviços
- Diferencial da empresa
- Call-to-action

### 2. Sobre (sobre.php)
- História da empresa
- Missão e valores
- Diferenciais
- Áreas de atuação

### 3. Gerenciamento de Redes Sociais (gerenciamento.php)
- Descrição dos serviços
- Itens inclusos nos pacotes
- Captação de conteúdo
- Produção fotográfica

### 4. Identidades Visuais (identidades.php)
- Serviços de identidade visual
- Itens inclusos
- Diferenciais (sem limite de alterações)
- Materiais personalizados

### 5. Outros Serviços (outros-servicos.php)
- Criação de sites
- Tráfego pago
- Identidade verbal
- Assessoria de conteúdo
- Posts avulsos
- Sessões fotográficas

### 6. Calendário Pet (calendario.php)
- Sistema interativo de meses
- Datas comemorativas por mês
- Interface intuitiva com animações
- Benefícios do calendário

## ✨ Funcionalidades

### Header
- Menu de navegação responsivo
- Efeito de scroll (muda ao rolar a página)
- Menu hambúrguer para mobile
- Links ativos destacados

### Animações
- Scroll reveal (elementos aparecem ao rolar)
- Hover effects nos cards
- Transições suaves
- Fade in no carregamento

### Calendário Pet
- Seleção interativa de meses
- Listagem de datas por mês
- Animações de transição
- Botão de voltar

### URLs Amigáveis
- `/home` → index.php
- `/sobre` → sobre.php
- `/gerenciamento-redes-sociais` → gerenciamento.php
- `/identidades-visuais` → identidades.php
- `/outros-servicos` → outros-servicos.php
- `/calendario-pet` → calendario.php

## 🎯 Recursos Implementados

- ✅ Design moderno e profissional
- ✅ Totalmente responsivo
- ✅ Animações e efeitos suaves
- ✅ SEO-friendly (meta tags, URLs amigáveis)
- ✅ Performance otimizada
- ✅ Cross-browser compatible
- ✅ Acessibilidade
- ✅ Código limpo e organizado

## 📱 Responsividade

O site é totalmente responsivo com breakpoints em:
- Desktop: > 968px
- Tablet: 640px - 968px
- Mobile: < 640px

## 🔧 Configuração

### Requisitos
- PHP 7.0 ou superior
- Servidor web (Apache/Nginx)
- Mod_rewrite habilitado (para URLs amigáveis)

### Instalação
1. Faça upload dos arquivos para o servidor
2. Certifique-se de que o mod_rewrite está habilitado
3. Ajuste as permissões das pastas se necessário
4. Acesse o site pelo navegador

### Personalização
- **Cores:** Edite as variáveis CSS em `css/style.css`
- **Conteúdo:** Edite os arquivos PHP de cada página
- **Calendário:** Adicione datas em `js/calendario.js` no objeto `calendarioDatas`
- **Contatos:** Atualize links do WhatsApp e redes sociais

## 📞 Contatos para Atualizar

Lembre-se de atualizar os seguintes contatos no código:
- WhatsApp: `5551999999999` (footer.php e páginas)
- Email: `contato@vetorizando.com.br` (footer.php)
- Instagram: `@vetorizando` (footer.php)

## 🎨 Paleta de Cores

```css
--gold-light: #D4AF37
--gold-dark: #B8860B
--white-light: #FFFFFF
--white-dark: #F5F5F5
--text-dark: #2C2C2C
--text-light: #666666
```

## 📝 Notas

- Todas as imagens devem ser adicionadas na pasta `/img/`
- O site usa Google Fonts (Inter)
- jQuery é carregado via CDN
- Animações usam Intersection Observer API

## 🚀 Próximos Passos Sugeridos

1. Adicionar imagens reais na pasta `/img/`
2. Atualizar informações de contato
3. Configurar formulário de contato (se necessário)
4. Adicionar Google Analytics
5. Configurar certificado SSL
6. Otimizar imagens para web
7. Testar em diferentes navegadores

---

**Desenvolvido para Vetorizando - Marketing Veterinário**
