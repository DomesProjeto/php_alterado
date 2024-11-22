<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a viewport para a responsividade -->
    <!-- Link para o CSS do Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Links para folhas de estilo personalizadas -->
    <link rel="stylesheet" href="css/menu/styles.css">
    <link rel="stylesheet" href="css/menu/footer.css">
    <!-- Atalho para o ícone do site -->
    <link rel="shortcut icon" href="img/menu/logo.png" type="image/x-icon">
    <!-- Script para jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Script para o ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Script personalizado para funcionalidades do menu -->
    <script src="js/menu.js"></script>
    <title>Domes</title> <!-- Título da página -->
</head>
<body>
    <header>
        <!-- Navegação principal -->
        <nav id="navbar">
            <!-- Logo da navegação -->
            <img src="img/menu/logo.png" alt="Descrição da imagem" id="nav_logo"> 
            <!-- Lista de navegação -->
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
                <li class="nav-item active">
                    <a href="perfil_trabalhador.php">Perfil</a>
                </li>
                <li class="nav-item active">
                    <a href="sobre.php">Sobre</a>
                </li>
            </ul>
        </nav>
        <!-- Menu para dispositivos móveis -->
        <div id="mobile_menu">
            <!-- Lista de navegação para dispositivos móveis -->
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>
        </div>
    </header>

    <main id="content">
        <!-- Seção inicial -->
        <section id="home">
            <div class="shape"></div> <!-- Elemento decorativo -->
            <div id="cta"> <!-- Chamada para ação -->
                <h1 class="title">
                    Descubra especialistas e agende serviços para todas as suas
                    <span>Necessidades</span>
                </h1>
                <p class="description">
                    Contrate profissionais e veja sua casa cuidada por nós
                </p>
                <strong><p class="description">
                    Serviços mais Buscados:
                </p></strong>

                <div id="cta_buttons">
                    <!-- Botões de chamada para ação -->
                    <a href="#" class="btn-default">
                        Diarista
                    </a>
                    <a href="#" class="btn-default">
                        Pintura
                    </a>
                    <a href="#" class="btn-default">
                        Elétrica
                    </a>
                </div>

                <div class="social-media-buttons"> <!-- Botões de redes sociais -->
                    <a href="">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>

            <div id="banner"> <!-- Imagem do banner -->
                <img src="img/menu/home.png" alt="">
            </div>
        </section>

        <!-- Seção de serviços -->
        <section id="menu">
            <h2 class="section-title">Serviços</h2>
            <h3 class="section-subtitle">Mais Contratados da Plataforma</h3>

            <div id="buscados">
                <div class="buscas"> <!-- Serviço específico -->
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/menu/serviço1.png" class="buscas-image" alt="">

                    <h3 class="buscas-title">
                        Serviços de Elétrica
                    </h3>

                    <span class="buscas-description">
                        Instalação de Painéis Solares    Manutenção Elétrica  
                    </span>

                    <div class="buscas-rate"> <!-- Avaliação do serviço -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="buscas-price"> <!-- Preço do serviço -->
                        <h4>Preço médio por hora: R$70,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="buscas"> <!-- Serviço específico -->
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/menu/serviço2.png" class="buscas-image" alt="">

                    <h3 class="buscas-title">
                        Serviços de Mudanças
                    </h3>

                    <span class="buscas-description">
                        Montagem e Desmontagem de Móveis Carregamento e Descarregamento 
                    </span>

                    <div class="buscas-rate"> <!-- Avaliação do serviço -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="buscas-price"> <!-- Preço do serviço -->
                        <h4>Preço médio por hora: R$50,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="buscas"> <!-- Serviço específico -->
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/menu/serviço3.png" class="buscas-image" alt="">

                    <h3 class="buscas-title">
                        Serviços de Pintura
                    </h3>

                    <span class="buscas-description">
                        Pintura profissional de Móveis e Armários Pintura Residencial
                    </span>

                    <div class="buscas-rate"> <!-- Avaliação do serviço -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="buscas-price"> <!-- Preço do serviço -->
                        <h4>Preço médio por hora: R$30,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>

                <div class="buscas"> <!-- Serviço específico -->
                    <div class="buscas-tool">
                        <i class="fa-solid fa-toolbox"></i>
                    </div>
                    <img src="img/menu/serviço4.png" class="buscas-image" alt="">

                    <h3 class="buscas-title">
                        Serviços de Diarista
                    </h3>

                    <span class="buscas-description">
                        Organização e Limpeza de Ambientes Limpeza Especializada 
                    </span>

                    <div class="buscas-rate"> <!-- Avaliação do serviço -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(500+)</span>
                    </div>

                    <div class="buscas-price"> <!-- Preço do serviço -->
                        <h4>Preço médio por hora: R$40,00</h4>
                        <button class="btn-default">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de avaliações -->
        <section id="testimonials">
            <img src="img/menu/comentários.png" id="testimonials_comentários" alt="">

            <div id="testimonials_content">
                <h2 class="section-title">
                    Feedbacks dos Clientes
                </h2>
                <h3 class="section-subtitle">
                    Como são os retornos dos trabalhos
                </h3>

                <div id="feedbacks">
                    <div class="feedback"> <!-- Comentário de um cliente -->
                        <img src="img/menu/icon1.png" class="feedback-avatar"alt="">

                        <div class="feedback-content">
                            <p>
                                Carlos Almeida
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Achei aqui no app um ótimo eletricista, ele fez a rede elétrica da nova casa da minha Mãe. Contratei um pintor agora e gostei muito da facilidade do aplicativo."
                            </p>
                        </div>
                    </div>
                    <div id="feedbacks">
                        <div class="feedback"> <!-- Comentário de outro cliente -->
                            <img src="img/menu/icon2.jpg" class="feedback-avatar"alt="">
    
                            <div class="feedback-content">
                                <p>
                                    Bianca Gomes
                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                </p>
                                <p>
                                    "Cheguei na cidade recentemente e esse app tem salvado a minha vida. Já contratei várias vezes e recomendo principalmente o serviço de limpeza deles"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <img src="img/menu/wave.svg" alt=""> <!-- Elemento decorativo no rodapé -->
        <div id="footer_items">
            <span id="copyright">
                &copy; 2024 DOMES
            </span>
            
            <div class="social-media-buttons"> <!-- Botões de redes sociais no rodapé -->
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
