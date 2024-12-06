<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o arquivo CSS do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link para o arquivo CSS personalizado -->
    <link rel="stylesheet" href="css/tela_inicial/styles.css">
    <!-- Favicon da página -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon"> <!-- Ícone da página -->
    <!-- Link para o arquivo JavaScript do jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link para o arquivo JavaScript do ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link para o arquivo JavaScript personalizado -->
    <script src="js/tela_inicial.js"></script>
    <!-- Link para o arquivo Popup -->
    <script src="js/popup.js"></script>
    <!-- Título da página -->
    <title>Domes</title>
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <!-- Barra de navegação -->
        <nav id="navbar">
            <!-- Logo do site -->
            <img src="img/menu/logo.png" alt="Descrição da imagem" id="nav_logo">
            <!-- Lista de navegação -->
            <ul id="nav_list">
                <li class="nav-item active"><a href="#home">Início</a></li>
                <li class="nav-item"><a href="#menu">Serviços</a></li>
                <li class="nav-item"><a href="#testimonials">Avaliações</a></li>
            </ul>
            <!-- Botões de Cadastro e Login -->
            <button class="btn-default"><a href="cadastro_trabalhador.php">Cadastrar como Trabalhador</a></button>
            <button class="btn-default"><a href="login.php">Entrar</a></button>
            <!-- Botão do menu móvel -->
            <button id="mobile_btn"><i class="fa-solid fa-bars"></i></button>
        </nav>
        <!-- Menu móvel -->
        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item"><a href="#home">Início</a></li>
                <li class="nav-item"><a href="#menu">Serviços</a></li>
                <li class="nav-item"><a href="#testimonials">Avaliações</a></li>
            </ul>
        </div>
    </header>

    <!-- Conteúdo principal da página -->
    <main id="content">
        <!-- Seção Início -->
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">Encontre Oportunidades de Trabalho e Conquiste sua Independência <span>Cadastre-se Agora!</span></h1>
                <p class="description">Ofereça seus serviços para pessoas que precisam da sua ajuda.</p>
                <strong><p class="description">Áreas mais procuradas por trabalhadores:</p></strong>
                <div id="cta_buttons">
                    <a href="cadastro_trabalhador.php#diarista" class="btn-default">Diarista</a>
                    <a href="cadastro_trabalhador.php#pintura" class="btn-default">Pintura</a>
                    <a href="cadastro_trabalhador.php#eletrica" class="btn-default">Elétrica</a>
                </div>
                <div class="social-media-buttons">
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div id="banner"><img src="img/menu/home.png" alt=""></div>
        </section>

        <!-- Seção Serviços -->
        <section id="menu">
            <h2 class="section-title">Áreas de Trabalho</h2>
            <h3 class="section-subtitle">Inscreva-se para oferecer serviços em</h3>
            <div id="buscados">
                <div class="buscas">
                    <img src="img/menu/serviço1.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">Serviços de Elétrica</h3>
                    <span class="buscas-description">Ofereça serviços de instalação e manutenção elétrica.</span>
                </div>
                <div class="buscas">
                    <img src="img/menu/serviço2.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">Serviços de Mudanças</h3>
                    <span class="buscas-description">Ajudar com montagem, desmontagem e transporte de móveis.</span>
                </div>
                <div class="buscas">
                    <img src="img/menu/serviço3.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">Serviços de Pintura</h3>
                    <span class="buscas-description">Pintura de móveis e espaços residenciais.</span>
                </div>
                <div class="buscas">
                    <img src="img/menu/serviço4.png" class="buscas-image" alt="">
                    <h3 class="buscas-title">Serviços de Diarista</h3>
                    <span class="buscas-description">Limpeza residencial e organização de ambientes.</span>
                </div>
            </div>
        </section>

        <!-- Seção Avaliações -->
        <section id="testimonials">
            <img src="img/menu/comentários.png" id="testimonials_comentários" alt="">
            <div id="testimonials_content">
                <h2 class="section-title">Feedbacks dos Clientes da Plataforma</h2>
                <h3 class="section-subtitle">Retorno dos trabalhos</h3>
                <div id="feedbacks">
                    <div class="feedback">
                        <img src="img/menu/icon1.png" class="feedback-avatar" alt="">
                        <div class="feedback-content">
                            <p>Carlos Almeida <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <p>"Achei aqui no app um ótimo eletricista, ele fez a rede elétrica da nova casa da minha Mãe. Contratei um pintor agora e gostei muito da facilidade do aplicativo."</p>
                        </div>
                    </div>
                    <div class="feedback">
                        <img src="img/menu/icon2.jpg" class="feedback-avatar" alt="">
                        <div class="feedback-content">
                            <p>Bianca Gomes <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span></p>
                            <p>"Cheguei na cidade recentemente e esse app tem salvado a minha vida. Já contratei várias vezes e recomendo principalmente o serviço de limpeza deles."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Rodapé da página -->
    <footer>
        <img src="img/menu/wave.svg" alt="">
        <div id="footer_items">
            <span id="copyright">&copy; 2024 DOMES</span>
            <div class="social-media-buttons">
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </footer>
</body>
<div id="loginPopup" class="popup">

    <div class="popup-content">

        <main id="login-container"> <!-- Container principal para o formulário de login -->

            <form id="login_form"> <!-- Formulário de login -->

                <div id="form_header"> <!-- Cabeçalho do formulário -->

                    <h1>Faça o seu Login</h1>

                </div>

    

                <div id="inputs"> <!-- Grupo de campos de entrada -->

                    <div class="input-box"> <!-- Caixa de entrada para o e-mail -->

                        <label for="email">

                            <h2>E-mail:</h2> <!-- Rótulo para o campo de e-mail -->

                            <div class="input-field"> <!-- Campo de entrada para o e-mail -->

                                <i class="fa-solid fa-envelope"></i> <!-- Ícone de envelope -->

                                <input type="email" id="email" name="email"> <!-- Campo de texto para o e-mail -->

                            </div>

                        </label>

                    </div>

                    <div class="input-box"> <!-- Caixa de entrada para a senha -->

                        <label for="password">

                            <h2>Senha:</h2> <!-- Rótulo para o campo de senha -->

                            <div class="input-field"> <!-- Campo de entrada para a senha -->

                                <i class="fa-solid fa-user"></i> <!-- Ícone de usuário -->

                                <input type="password" id="password" name="password"> <!-- Campo de texto para a senha -->

                            </div>

                        </label>

                        <div id="forgot-password"> <!-- Link para recuperar senha -->

                            <a href="#">

                                <h3>Esqueci minha Senha</h3>

                            </a>

                        </div>

                    </div>

                </div>

                

                <button type="submit" id="login-button"> <!-- Botão de login -->

                    <a href="menu.html">Entrar</a> <!-- Link para a página de menu -->

                </button>          

            </form>

        </main>

    </div>

</div>



</html>
