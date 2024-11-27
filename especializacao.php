<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura a viewport para garantir que a página se ajuste à largura da tela do dispositivo -->
    <title>Escolha um serviço</title> <!-- Título da página -->
    <link rel="stylesheet" href="css/especializacao.css"> <!-- Link para o arquivo CSS externo -->
    <script src="js/especializacao.js"></script> <!-- Link para o arquivo JavaScript externo -->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container"> <!-- Container principal para o conteúdo da página -->
        <h1>Sobre os seus serviços Responda</h1> <!-- Título principal da página -->
        <h3>Os seus ambientes de atuação são:</h3> <!-- Subtítulo para a seção de seleção de ambientes -->
        <form>
            <fieldset> <!-- Grupo de campos do formulário -->
                <legend>Selecione o local:</legend> <!-- Legenda do fieldset -->
                <label>
                    <input type="checkbox" name="local" value="Ambiente Doméstico"> <!-- Checkbox para "Ambiente Doméstico" -->
                    Ambiente Doméstico
                    <legend> Casa - Apartamento - Área Externa</legend> <!-- Descrição adicional, mas está incorretamente colocada dentro de um label -->
                </label>
                <label>
                    <input type="checkbox" name="local" value="Ambiente Comercial"> <!-- Checkbox para "Ambiente Comercial" -->
                    Ambiente Comercial
                    <legend>Escritório - Loja e comércio - Restaurante e Cafeteria</legend> <!-- Descrição adicional, mas está incorretamente colocada dentro de um label -->
                </label>
                <label>
                    <input type="checkbox" name="local" value="Ambiente Público"> <!-- Checkbox para "Ambiente Público" -->
                    Ambiente Público
                    <legend>Escolas e Universidades - Hospital e Clínica - Instituição Governamental</legend> <!-- Descrição adicional, mas está incorretamente colocada dentro de um label -->
                </label>
                <label>
                    <input type="checkbox" name="local" value="Ambiente Industrial"> <!-- Checkbox para "Ambiente Industrial" -->
                    Ambiente Industrial
                    <legend>Fábricas - Armazéns e Depósitos - Oficinas </legend> <!-- Descrição adicional, mas está incorretamente colocada dentro de um label -->
                </label>
                <label>
                    <input type="checkbox" name="local" value="Outros lugares Específicos"> <!-- Checkbox para "Outros lugares Específicos" -->
                    Outros lugares Específicos
                    <legend>Condomínios - Transporte Públicos - Eventos e Espaços - Hotéis e Pousadas</legend> <!-- Descrição adicional, mas está incorretamente colocada dentro de um label -->
                </label>
            </fieldset>
        </form>
        
        <h3> Selecione o Serviço:</h3> <!-- Subtítulo para a seção de seleção de serviços -->
        <div class="scrollable-list"> <!-- Div para a lista de seleção rolável -->
            <select id="itemList" onchange="selectItem(this.value)"> <!-- Dropdown para seleção de serviço com evento onchange -->
                <option value="">Selecione...</option> <!-- Opção padrão vazia -->
                <optgroup label="CONSTRUÇÃO"> <!-- Grupo de opções para "CONSTRUÇÃO" -->
                    <option value="Arquiteto">Arquiteto</option> <!-- Opções individuais -->
                    <option value="Design De Interiores">Design De Interiores</option>
                    <option value="Empreiteiro">Empreiteiro</option>
                    <option value="Limpeza Pós Obra">Limpeza Pós Obra</option>
                    <option value="Marmoraria e Granito">Marmoraria e Granito</option>
                    <option value="Remoção de Entulho">Remoção de Entulho</option>
                    <option value="Pedreiro">Pedreiro</option>
                    <option value="Poço Artesiano">Poço Artesiano</option>
                </optgroup>
                <optgroup label="INSTALAÇÃO"> <!-- Grupo de opções para "INSTALAÇÃO" -->
                    <option value="Antenista">Antenista</option>
                    <option value="Instalador de TV">Instalador de TV</option>
                    <option value="Instalador de Eletrônicos">Instalador de Eletrônicos</option>
                    <option value="Toldos e Coberturas">Toldos e Coberturas</option>
                    <option value="Gás">Gás</option>
                </optgroup>
                <!-- Adicione as outras categorias aqui --> <!-- Comentário para adição futura de outras categorias -->
            </select>
        </div>
        <h3>Você selecionou:</h3> <!-- Subtítulo para exibir o item selecionado -->
        <div class="selected-item" id="selectedItem"></div> <!-- Div onde o item selecionado será exibido -->
        
        <h4>Deseja informar algo a mais?</h4> <!-- Subtítulo para informações adicionais -->
        <label for="campoTexto">Adicionar informação:</label> <!-- Rótulo para o campo de texto -->
        <input type="text" id="campoTexto" name="nome"> <!-- Campo de texto para informações adicionais -->
        
        
        <a href="index.php" class="button">Concluir cadastro</a> <!-- Link estilizado como botão para concluir o cadastro -->
</body>
</html>
