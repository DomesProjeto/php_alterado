<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Configura o comportamento para o modo de compatibilidade do IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Configura a viewport para a responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página -->
    <title>Seu Perfil</title>
    <!-- Link para a fonte Montserrat do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Link para a fonte Bebas Neue do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Link para a folha de estilo personalizada -->
    <link rel="stylesheet" href="css/perfil.css">
    <!-- Atalho para o ícone do site -->
    <link rel="shortcut icon" href="img/tela_inicial/logo.png" type="image/x-icon">
</head>

<body>
    <header>
        <!-- Navegação principal -->
        <nav id="navbar">
            <!-- Logo da navegação que redireciona para a página do menu -->
            <a href="menu.php"><img src="img/menu/logo.png" alt="Logo" id="nav_logo"></a>
            <!-- Botão para editar o perfil -->
            <button class="btn-default">
                <a href="editar_trabalhador.php">Editar</a>
            </button>
        </nav>
    </header>

    <div class="wrapper">
        <!-- Cartão do usuário -->
        <div class="user-card">
            <!-- Imagem do usuário -->
            <div class="user-card-img">
                <img src="img/perfilexpositivo/avatar2.png" alt="Foto de Carlos Nogueira">
            </div>
            <!-- Informações do usuário -->
            <div class="user-card-info">
                <!-- Nome do usuário -->
                <h2>Carlos Nogueira</h2>
                <span></span>
                <!-- Email do usuário -->
                <p><span>Email:</span> nogueiracarlos@gmail.com</p>
                <!-- Número de celular do usuário -->
                <p><span>Celular:</span> (xx) xxxxx-xxxx</p>
                <!-- Localização do usuário -->
                <p><span>Localização:</span> Serra, Espirito Santo</p>
                <!-- Sobre mim do usuário -->
                <p><span>Sobre mim:</span> Trabalho fora de casa em tempo integral, por isso preciso que o aplicativo me ajude a encontrar pessoas para fazerem tarefas domésticas.</p>
            </div>
        </div>
    </div>
</body>

</html>
