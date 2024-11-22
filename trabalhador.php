<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Início da seção de cabeçalho -->
    <meta charset="UTF-8"> <!-- Meta tag para definir a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta tag para configuração de viewport -->
    <link rel="stylesheet" href="css/cadastro.css"> <!-- Link para arquivo CSS externo -->
    <title>Cadastro do Contratante</title> <!-- Título da página -->
    <link rel="shortcut icon" href="img/menu/logo.png" type="image/x-icon"> <!-- Ícone da página -->
    <script src="js/cep.js"></script> <!-- Link para o arquivo JavaScript -->
</head>

<body>
    <!-- Início do corpo da página -->
    <div class="container">
        <!-- Div principal com classe container -->
        <div class="form-image">
            <!-- Div para a imagem do formulário -->
            <img src="img/logo2.png" alt="Logo"> <!-- Imagem do logotipo -->
        </div>
        
        <div class="form">
            <!-- Div para o formulário de cadastro -->
            <form action="#">
                <!-- Formulário com método de ação indefinido -->

                <div class="form-header">
                    <!-- Div para cabeçalho do formulário -->
                    <div class="title">
                        <!-- Div para título -->
                        <h1>Continue o seu cadastro</h1> <!-- Título principal -->
                    </div>
                </div>

                <div class="input-group">
                    <!-- Div para o grupo de campos de entrada -->
                    <div class="input-box">
                        <!-- Div para cada caixa de entrada -->
                        <label for="cep">CEP</label> <!-- Rótulo para campo de entrada -->
                        <input id="cep" type="text" name="cep" placeholder="Digite o CEP" onblur="buscarEndereco()" required>
                        <!-- Campo de entrada para o CEP -->
                    </div>
                    <div class="input-box">
                        <label for="state">Estado</label> <!-- Rótulo para campo de entrada -->
                        <input id="state" type="text" name="state" placeholder="Digite o seu Estado" required>
                        <!-- Campo de entrada para estado -->
                    </div>
                    <div class="input-box">
                        <label for="municipio">Município</label> <!-- Rótulo para campo de entrada -->
                        <input id="municipio" type="text" name="municipio" placeholder="Digite o seu Município" required>
                        <!-- Campo de entrada para município -->
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro</label> <!-- Rótulo para campo de entrada -->
                        <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                        <!-- Campo de entrada para bairro -->
                    </div>
                    <div class="input-box">
                        <label for="num">Número</label> <!-- Rótulo para campo de entrada -->
                        <input id="num" type="text" name="num" placeholder="Número" required>
                        <!-- Campo de entrada para número -->
                    </div>
                    <div class="input-box">
                        <label for="complemento">Complemento</label> <!-- Rótulo para campo de entrada -->
                        <input id="complemento" type="text" name="complemento" placeholder="Complemento" required>
                        <!-- Campo de entrada para complemento -->
                    </div>
                    <div class="input-box">
                        <label for="profilepic">Foto de Perfil</label> <!-- Rótulo para campo de entrada -->
                        <input id="profilepic" type="file" name="profilepic" accept="image/*">
                        <!-- Campo de entrada para upload de foto de perfil -->
                    </div>
                </div>

                <div class="continue-button">
                    <!-- Div para botão de continuação -->
                    <button><a href="especializacao.html">Continuar Cadastro</a></button>
                    <!-- Botão com link para página de menu -->
                </div>
            </form>
        </div>
    </div>

</body>

</html>
