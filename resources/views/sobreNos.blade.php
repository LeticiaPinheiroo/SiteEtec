<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite("resources/css/app.css")
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title img="img/etec_cabeca.png">Etec Zona Leste</title> <!--Colocar img do lado do titulo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--import dos icones do botão de tema-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   
    <style>
        /* nao sei colocar fonte */
       .header{
        font-family:"Work Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
       }
       /* Adicionei um estilo para o tema escuro */
        .dark-mode {
            background-color: #1f2937;
            color: #ebe9e1;
        }

    body {
            font-family: 'Libre Franklin', sans-serif;
        }

        /* Animação de pulso */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .pulse {
            animation: pulse 1s ease-in-out;
        }

        /* Botão de rolar para cima */
        .scroll-up {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ff0000;
            color: #ffffff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            z-index: 9999;
        }

        .container{
            display: inline-block;
        }

        .typed-out{
            overflow: hidden;
            border-right: .15em solid orange;
            white-space: nowrap;
            animation: typing 2s steps(20, end) forwards, blinking .8s infinite;
            font-size: 1.6rem;
            width: 0;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        @keyframes blinking {
            from { border-color: transparent }
            to { border-color: orange; }
        }


         /* Esconde a barra de rolagem padrão */
    ::-webkit-scrollbar {
        width: 5px; /* Largura da barra de rolagem */
    }

    /* Estilo da barra de rolagem */
    ::-webkit-scrollbar-track {
        background: transparent; /* Cor de fundo da barra de rolagem */
    }

    /* Estilo do "thumb" (a parte que o usuário arrasta) */
    ::-webkit-scrollbar-thumb {
        background: #888; /* Cor do "thumb" */
        border-radius: 5px; /* Borda arredondada do "thumb" */
    }

    /* Estilo do "thumb" quando estiver sendo arrastado */
    ::-webkit-scrollbar-thumb:hover {
        background: #555; /* Cor do "thumb" quando hover */
    }

    [data-carousel-item] {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: transform 0.5s ease-in-out;
    }

    [data-carousel-item].hidden {
        transform: translateX(-100%);
    }

    [data-carousel-item]:not(.hidden) {
        transform: translateX(0);
    }
    </style>

</head>
<body class="dark-mode transition-colors duration-500" id="info">
    <header>
        <nav class="bg-slate-900   px-6 fixed top-0 w-full z-50">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-12 w-auto" src={{ asset('img/LogoETECZL_BG.png') }} " alt="Your Company">
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ url('/home') }}" class="bg-gray-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Início</a>
                                <a href="#curso" class="bg-gray-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Cursos</a>           
                                <a href="#" class="bg-gray-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Departamentos</a>
                                <a href="#inst" class="bg-gray-950 text-white rounded-md px-4 py-4 text-sm font-medium" aria-current="page">Sobre nós</a>
                            </div>       
                        </div>
                    </div>
                    <!-- Botao de mudar tema -->
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <button id="themeToggle" type="button" class="relative rounded-full bg-slate-900 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-none focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Alterar Tema</span>
                            <i id="themeIcon" class="fas fa-sun text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav> <!-- Fim da navBar -->
            <!-- Config do botão de tema-->
            <script>
                    const themeToggle = document.getElementById('themeToggle');
                    const themeIcon = document.getElementById('themeIcon');

                    themeToggle.addEventListener('click', function() {
                    const currentTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                     // Altera o tema do corpo
                    document.body.classList.toggle('dark-mode');

                    // Altera o ícone dependendo do tema
                    themeIcon.className = newTheme === 'dark' ? 'fas fa-sun text-xl' : 'fas fa-moon text-xl';

                    // Armazena o tema selecionado no localStorage
                    localStorage.setItem('theme', newTheme);
                    });

                    // Verifica se há um tema armazenado no localStorage
                    const savedTheme = localStorage.getItem('theme');
                    if (savedTheme) {
                    document.body.classList.toggle('dark-mode', savedTheme === 'dark');
                    // Altera o ícone dependendo do tema
                    themeIcon.className = savedTheme === 'dark' ? 'fas fa-sun text-xl' : 'fas fa-moon text-xl';
                    }
            </script>
    </header>

    <!--corpo da página-->
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

 <!--header-->
<main class=" w-full">
        <section class="w-full" id="home">
        <div class="bg-fixed " style="background-image: url(img/imgemInicio.jpg)">
        <div class="relative">
        <div class="absolute inset-0 bg-black opacity-40"></div>
                <div class="p-20 flex justify-center items-start  h-full flex-col sm:max-w-1/3 relative z-10 ">    
                    <h1 class=" md:w-1/3 md:min-w-96  text-2xl text-balance text-white py-5 text-justify">Sobre nós</h1>
                    <p class="text-white text-5xl font-bold md:text-6xl md:min-w-96">Conheça mais sobre nossa infraestrutura</p>
                    <div>
                    </div>
                    </div>
                </div>    
            </div>
        </section>
            
         <!--grupo 1-->
        <section class="w-full" id="sobreNos">
        <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- maps da etec-->
            <div class="md:order-2">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1712695762338!6m8!1m7!1sIQOHrz-g1sHpIoXYiX3yqA!2m2!1d-23.52310032680193!2d-46.47527203258657!3f283.34932377633197!4f0!5f0.7820865974627469" width="600" height="450" style="border:2px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                <!-- Texto -->
                <div class="md:order-1 p-10">
                <div class="container">
                    <div class="typed-out" Style="font-weight: bold">Sobre a Instituição</div>
                </div>
                    <p class="text-justify leading-relaxed">Inicialmente abandonado, o espaço que hoje comporta as respectivas instituições
                        de ensino ETEC e FATEC Zona Leste, seria utilizado para a construção de um presídio. A comunidade ao redor, ao 
                        receber a informação, logo prontificou-se a ir contra a ideia. Como moradores das redondezas, sentiam a necessidade
                        da implantação de um ambiente voltado à educação, pela valorização do local e, conclusivamente pela possibilidade
                        de ingresso de seus filhos em uma escola próxima, caso o pedido fosse realizado. Abaixo-assinados percorreram
                        as proximidades de todo o terreno que, graças ao bom número de assinaturas colhidas, atualmente são localizadas
                        as duas instituições pertencentes ao Centro Paula Souza.</p>
                    <p class="text-justify  leading-relaxed mt-4">Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da 
                        sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada 
                        de professores e funcionários, nossa escola oferece uma variedade de cursos técnicos, proporcionando aos alunos 
                        uma formação sólida e atualizada.</p>
                </div>
        </div>
        </section>
<br><br>

                <!--grupo 2-->
<section class="w-full" id="sobreNos">
    <div class="container mx-auto px-20 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> 
            <!-- Imagem -->
            <div class="md:order-1">
                <!-- Carrossel -->
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="../../img/patio.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="../../img/log.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="../../img/auditorio.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="../../img/pc.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="./../img/jurid.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
              </div>
              <script>
                document.addEventListener("DOMContentLoaded", function() {
    const carouselItems = document.querySelectorAll('[data-carousel-item]');
    const carouselPrevBtn = document.querySelector('[data-carousel-prev]');
    const carouselNextBtn = document.querySelector('[data-carousel-next]');
    let currentSlide = 0;
    let timer; // Variável para armazenar o temporizador

    // Função para mostrar o slide atual e esconder os outros
    function showSlide(index) {
        carouselItems.forEach((item, i) => {
            if (i === index) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    // Função para mostrar o próximo slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % carouselItems.length;
        showSlide(currentSlide);
    }

    // Função para mostrar o slide anterior
    function prevSlide() {
        currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
        showSlide(currentSlide);
    }

    // Função para avançar automaticamente os slides a cada 3 segundos
    function autoAdvance() {
        timer = setTimeout(function() {
            nextSlide();
            autoAdvance(); // Chama a função novamente para avançar para o próximo slide
        }, 3000); // Intervalo de 3 segundos
    }

    // Adicionar ouvintes de eventos para os botões de navegação
    carouselPrevBtn.addEventListener('click', function() {
        clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
        prevSlide();
        autoAdvance(); // Reinicia o avanço automático
    });

    carouselNextBtn.addEventListener('click', function() {
        clearTimeout(timer); // Limpa o temporizador ao clicar no botão de navegação
        nextSlide();
        autoAdvance(); // Reinicia o avanço automático
    });

    // Iniciar o avanço automático ao carregar a página
    autoAdvance();
});

              </script>
            <!-- Texto -->
            <div class="md:order-2 p-5">
            <div class="container">
             <div class="typed-out" Style="font-weight: bold; padding-left: 35px;">Infraestrutura</div>
            </div>
            <div class="container mx-auto px-10 py-2 shadow-md max-h-80 overflow-y-auto">
                    <ul class="list-disc">
                        <li class="text-lg font-semibold">Patio</li>
                        <p class="text-justify leading-relaxed px-5">O pátio da instituição é um verdadeiro refúgio. Árvores, flores e plantas dão ao 
                                    ambiente uma atmosfera de serenidade e frescor. É um espaço que convida os alunos a desfrutarem do ar livre enquanto se 
                                    dedicam às suas atividades acadêmicas e sociais.</p>

                        <li class="text-lg font-semibold">Salas de Aula</li>
                        <p class="text-justify leading-relaxed px-5 md:text-1xl">As salas de aula da ETEC são espaços projetados para promover um ambiente 
                                    de aprendizado dinâmico e colaborativo. Equipadas com recursos modernos, como quadros interativos, projetores multimídia e 
                                    acesso à internet, as salas de aula oferecem suporte às metodologias de ensino inovadoras.</p>

                        <li class="text-lg font-semibold">Auditório</li>
                        <p class="text-justify leading-relaxed px-5 md:text-1xl">O auditório da ETEC é um espaço multifuncional projetado para acomodar uma 
                                    variedade de eventos educacionais e culturais. Com capacidade para receber um grande número de pessoas, o auditório é equipado 
                                    com tecnologia de áudio e vídeo de ponta, incluindo sistemas de som e iluminação de alta qualidade, bem como telões e projetores 
                                    de última geração.</p>

                        <li class="text-lg font-semibold">Laboratórios</li>
                        <p class="text-justify leading-relaxed px-5 md:text-1xl">Os laboratórios de informática da ETEC são espaços essenciais para o desenvolvimento 
                                    de habilidades tecnológicas e o aprimoramento do aprendizado prático dos alunos. Equipados com computadores de última geração, software 
                                    especializado e acesso à internet de alta velocidade, esses laboratórios oferecem um ambiente propício para o estudo e a prática de 
                                    disciplinas relacionadas à tecnologia da informação e comunicação.</p>

                        <li class="text-lg font-semibold">Sala Maker</li>
                        <p class="text-justify leading-relaxed px-5 md:text-1xl">A Sala Maker da ETEC da Zona Leste é um espaço inovador e inspirador, projetado para 
                                    estimular a criatividade, a inovação e o empreendedorismo entre os estudantes. Equipada com ferramentas, máquinas e materiais de última 
                                    geração, como impressoras 3D, kits de eletrônica, entre outros recursos, a Sala Maker oferece aos alunos a oportunidade de transformar 
                                    suas ideias em realidade.</p>
                    </ul>
            </div>

            </div>
        </div>
    </div>
</section>

<section class="w-full" id="sobreNos">
    <h2 class="text-2xl font-semibold text-center mb-4 border-b-2 border-gray-400 pb-2 hover:scale-110 ease-linear duration-200">Acompanhe também no Youtube</h2>
    <div class="container mx-auto flex justify-center items-center h-screen">
        <div class="w-4/5 md:w-3/5 h-96 md:h-600px shadow-2xl">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/HDUT3DwQb0Y?si=MMlMyAJjk6cYkUxz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

</main>





<br>
<!--Roda pé do site-->
<h2 class="text-1xl font-semibold text-center mb-4 border-b-2 border-gray-400 pb-2 hover:scale-110 ease-linear duration-200">By:  Leticia Pinheiro 3ºDS A</h2>
    <footer>
    <div class="bg-zinc-200">
        <div class="container py-10" id="contato">
            <ul class="grid grid-cols-1 items-start gap-5 pb-5 md:grid-cols-3">
                <li>
                    <div class="space-y-3">
                        <a href="#" class="text-4xl font-oswald uppercase text-gray-950 font-bold">
                            ETEC da <span class="text-red-800">Zona Leste</span>
                        </a>
                        <p class="text-xs text-justify text-gray-950">
                            A Escola ETEC da Zona Leste é um exemplo notável de excelência na educação.
                            Com um compromisso inabalável com o sucesso dos alunos, a Escola oferece um ambiente de aprendizado enriquecedor,
                            onde a excelência é cultivada em todos os aspectos da educação.
                        </p>
                    </div>
                </li>

                <li class="space-y-8">
                    <div class="space-y-2">
                        <h3 class=" text-lg uppercase font-oswald text-gray-950 font-bold">Contato</h3>

                        <p class="flex items-center gap-2 text-xs text-gray-950">
                            <span class="material-symbols-outlined text-lg text-red-800 font-bold">call</span>
                            +55 (11)XXXXX-XXXX
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald text-gray-950 font-bold">Email</h3>

                        <p class="flex items-center gap-2 text-xs text-gray-950 font-bold">
                            <span class="material-symbols-outlined text-lg text-red-800">mail</span>
                            etec@etec.com
                        </p>
                    </div>
                </li>

                <li class="space-y-8">
                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald text-gray-950 font-bold">Endereço</h3>

                        <p class="flex items-center gap-2 text-xs text-gray-950 font-bold">
                            <span class="material-symbols-outlined text-lg text-red-800">location_on</span>
                            Av. Aguia de Haia, XX
                        </p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="text-lg uppercase font-oswald text-red-800 dark:text-gray-950 font-bold">Acompanhe</h3>
                        <div class="space-x-3">
                            <a href="https://www.instagram.com/eteczonalesteoficial?igsh=OHY3emYzaTBvNjA5" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram text-lg cursor-pointer text-gray-950 hover:-translate-y-1 ease-in duration-200"></i>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook text-lg cursor-pointer text-gray-950 hover:-translate-y-1 ease-in duration-200"></i>
                            </a>
                            <a href="https://www.youtube.com/@etecdazonaleste2949" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-youtube  text-lg cursor-pointer text-gray-950 hover:-translate-y-1 ease-in duration-200"></i>
                            </a>
                            
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="flex flex-col items-center border-t border-red-800 py-5 md:flex-row md:justify-between">
            <p class="paragraph text-gray-950">Etec da Zona Leste</p>
            <p class="paragraph text-gray-950"> Copyright © 2024 Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<a href="#" class="fixed right-4 bottom-4 bg-red-800 shadow-sm inline-block px-4 py-2 rounded-full text-lg z-50 hover:-translate-y-1 ease-in duration-200" id="scroll-up">
    <span class="text-white"><i class="fas fa-arrow-up"></i></span>
</a>

<script>
 window.addEventListener('scroll', function() {
            var scrollButton = document.getElementById('scroll-up');
            if (document.body.scrollTop > window.innerHeight / 2 || document.documentElement.scrollTop > window.innerHeight / 2) {
                scrollButton.classList.add('pulse');
                scrollButton.style.display = 'block';
            } else {
                scrollButton.classList.remove('pulse');
                scrollButton.style.display = 'none';
            }
        });

        document.getElementById('scroll-up').addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });


    document.addEventListener("DOMContentLoaded", function() {
        var scrollUp = document.getElementById("scroll-up");

        scrollUp.addEventListener("click", function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
</script>


@vite(['resources/js/main.js'])




</body>

</html>