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

    </style>
</head>
<body class="dark-mode transition-colors duration-500">
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
                                <a href="{{ url('/home') }}" class="bg-gray-950 text-white rounded-md px-5 py-4 text-sm font-medium" aria-current="page">Início</a>
                                <a href="#curso" class="bg-gray-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Cursos</a>           
                                <a href="#" class="bg-gray-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Departamentos</a>
                                <a href="#inst" class="bg-slate-750 text-white rounded-md px-3 py-4 text-sm font-medium" aria-current="page">Sobre nós</a>
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
    <main class=" w-full">
        <section class="w-full" id="home">
        <div class="bg-fixed " style="background-image: url(img/imgemInicio.jpg)">
        <div class="relative">
        <div class="absolute inset-0 bg-black opacity-40"></div>
                <div class="p-20 flex justify-center items-start  h-full flex-col sm:max-w-1/3 relative z-10">    
                    <h1 class="text-white text-5xl font-bold md:text-6xl md:min-w-96">ETEC da Zona Leste</h1>
                    <p class="md:w-1/3 md:min-w-96  text-2xl text-balance text-white py-5 text-justify">A Escola ETEC da Zona Leste é um exemplo notável de excelência na educação.
                    Com um compromisso inabalável com o sucesso dos alunos, a Escola oferece um ambiente de aprendizado enriquecedor,
                    onde a excelência é cultivada em todos os aspectos da educação.</p>
                    <div>
                    </div>
                    </div>
                </div>    
            </div>
        </section>

        <section id="categoria" class="py-10">
    <div class="container flex flex-col gap-5 md:flex-row p-5">
        <!-- Painel 1 -->
        <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1 relative">
            <div class="w-24 h-24 bg-white rounded-full overflow-hidden ml-5">
                <img src={{ asset('img/prova.jpg') }} alt="imgCat" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 pl-4">
                <div class="mb-2">
                    <h4 class="card__title text-white text-5xl font-bold md:text-2xl">Vestibulinho</h4>
                    <p class="text-xs text-zinc-100">Exame que visa selecionar novos estudantes</p>
                </div>
                <a href="https://www.vestibulinhoetec.com.br/home/" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
            </div>
        </div>

        <!-- Painel 2 -->
        <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1 relative">
            <div class="w-24 h-24 bg-white rounded-full overflow-hidden ml-5">
                <img src={{ asset('img/LogoETECZL.jpg') }} alt="imgCat" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 pl-4">
                <div class="mb-2">
                    <h4 class="card__title text-white text-5xl font-bold md:text-2xl" id="inst">Portal do Aluno</h4>
                    <p class="text-xs text-zinc-100">NSA é o sistema acadêmico desenvolvido para facilitar o trabalho da área acadêmica das Etecs do Centro Paula Souza.</p>
                </div>
                <a href="https://nsa.cps.sp.gov.br/" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
            </div>
        </div>

        <!-- Painel 3 -->
        <div class="bg-red-800 flex py-3 rounded-lg overflow-hidden md:flex-1 relative">
            <div class="w-24 h-24 bg-white rounded-full overflow-hidden ml-5">
                <img src={{ asset('img/oport.png') }} alt="imgCat" class="w-full h-full object-cover">
            </div>
            <div class="flex-1 pl-4">
                <div class="mb-2">
                    <h4 class="card__title text-white text-5xl font-bold md:text-2xl">Oportunidades</h4>
                    <p class="text-xs text-zinc-100">Conheça o que espera você</p>
                </div>
                <a href="{{ url('/oportunidades') }}" class="underline underline-offset-2 text-zinc-100">Saiba mais</a>
            </div>
        </div>
    </div>
</section>

       
        <section>
            <section class="bg-fixed bg-cover bg-center">
            <div class="container mx-auto py-20 px-4">
                <div class="max-w-3xl mx-auto">
                    <h1 class="text-5xl  mb-8" id="sobrenos">Sobre nós</h1>
                    <p class="text-lg  mb-4 text-justify">Implantada no ano de 2008, na Avenida Águia de Haia, localizada na Zona Leste da cidade de São Paulo, a ETEC Zona Leste, oferece uma ampla variedade de cursos técnicos e superiores que atendem às necessidades e interesses de seus alunos.</p>
                    <p class="text-lg  mb-4 text-justify">A ETEC da Zona Leste está comprometida em fornecer uma educação de excelência e preparar seus alunos para os desafios do mercado de trabalho. Com uma estrutura completa, cursos diversificados e um corpo docente dedicado, a escola se destaca como uma instituição de referência no desenvolvimento educacional e profissional dos seus estudantes.
                     Estamos ansiosos para recebê-lo em nossa comunidade educacional, onde sua jornada de aprendizado será guiada por instrutores experientes e uma infraestrutura excepcional. Junte-se a nós na ETEC da Zona Leste e abra caminho para um futuro promissor.</p>
                     <button class="bg-red-800  hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                        <!--coisa da outra pagina-->     <a href="{{ url('/sobreNos')}}">Saiba Mais...</a>
                    </button>

                </div>
        </div>
    </section>

               

        <section class="w-full" id="home">
        <div class="bg-fixed " style="background-image: url(img/imgemInicio.jpg)">
        <div class="relative">
        <div class="absolute inset-0 bg-black opacity-40"></div>
                <div class="p-20 flex justify-center items-start  h-full flex-col sm:max-w-1/3 relative z-10">    
                <h1 class="text-white text-5xl font-bold md:text-7xl md:min-w-96">Destaque na educação</h1>
                <p class="md:w-1/3 md:min-w-96 text-1xl text-balance text-white py-5 text-justify">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                    <div>
                    </div>
                    </div>
                </div>    
            </div>
        </section>

        <div class="container mx-auto py-1 px-4 mt-10" id="curso">
    <h2 class="text-2xl font-semibold text-center mb-4 border-b-2 border-gray-400 pb-2 hover:scale-110 ease-linear duration-200">Todos os Cursos</h2>
</div>

<div class="container mx-auto px-10">
    <ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-12">
        <!-- Desenvolvimento de Sistemas -->
        <li class="item_wrap manha tarde noite">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/pc.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Desenvolvimento de Sistemas</h4>
                    <p class="text-justify">O curso de Desenvolvimento de Sistemas capacita os alunos a projetar, implementar e manter sistemas de software eficazes e inovadores. Com foco em programação, análise de dados, segurança da informação e gerenciamento de projetos, os estudantes adquirem habilidades técnicas e estratégicas para atender às demandas da indústria de tecnologia da informação.</p>
                </div>
            </div>
        </li>

        <!-- Recursos Humanos -->
        <li class="item_wrap manha">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/homi.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Recursos Humanos</h4>
                    <p class="text-justify">O curso de Recursos Humanos forma profissionais aptos a gerir o capital humano das organizações. Com ênfase em recrutamento, seleção, treinamento, desenvolvimento, remuneração e gestão de desempenho, os alunos aprendem a cultivar ambientes de trabalho produtivos, colaborativos e motivadores.</p>
                </div>
            </div>
        </li>

        <!-- Administração -->
        <li class="item_wrap manha tarde">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/admin.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Administração</h4>
                    <p class="text-justify">O curso de Administração prepara os estudantes para gerenciar organizações de forma eficiente e estratégica. Com ênfase em liderança, gestão de recursos humanos, finanças, marketing e operações, os alunos desenvolvem habilidades essenciais para tomar decisões fundamentadas e alcançar os objetivos organizacionais.</p>
                </div>
            </div>
        </li>

        <!-- Logística -->
        <li class="item_wrap tarde">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/log.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Logística</h4>
                    <p class="text-justify">O curso de Logística prepara os alunos para gerenciar eficientemente o fluxo de bens e serviços em toda a cadeia de suprimentos. Com enfoque em planejamento, transporte, armazenagem, distribuição e gestão de estoques, os estudantes desenvolvem competências para otimizar processos logísticos e agregar valor às operações empresariais.</p>
                </div>
            </div>
        </li>

        <!-- Contabilidade -->
        <li class="item_wrap noite">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/contab.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Contabilidade</h4>
                    <p class="text-justify">O curso de Contabilidade proporciona aos estudantes uma compreensão abrangente dos princípios contábeis e financeiros. Com foco em registros contábeis, análise de demonstrações financeiras, auditoria e tributação, os alunos desenvolvem habilidades essenciais para fornecer informações precisas e relevantes para tomada de decisões gerenciais e cumprimento de obrigações legais.</p>
                </div>
            </div>
        </li>

        <!-- Serviços Jurídicos -->
        <li class="item_wrap noite">
            <div class="h-67 grid place-items-center bg-blue-950 rounded-xl hover:bg-blue-900 ease-linear duration-200">
                <img src={{ asset('img/jurid.jpg') }} class="w-full h-full object-cover rounded-xl hover:scale-110 ease-linear duration-200">
            </div>
            <div class="pt-5">
                <div class="mb-2">
                    <h4 class="cardd__title text-5xl font-bold md:text-2xl">Serviços Jurídicos</h4>
                    <p class="text-justify">O curso Jurídico capacita os alunos a compreender e aplicar o arcabouço legal em diferentes contextos. Com ênfase em direito civil, penal, constitucional, trabalhista e empresarial, os estudantes adquirem conhecimentos jurídicos fundamentais e habilidades analíticas para assessorar organizações, resolver conflitos e promover a justiça dentro dos padrões éticos e legais.</p>
                </div>
            </div>
        </li>
    </ul>
</div>

 </section>
    </main>

       <<br>
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
