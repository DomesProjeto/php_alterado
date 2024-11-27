<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes Ativos</title>
    <link rel="stylesheet" href="css/cliente.css">
</head>

<body>
    <div class="container">
        <!-- Exibição do dia e hora atuais -->
        <div id="current-time" class="current-time"></div>
        
        <button class="back-button" onclick="goBack()">Voltar para a Página Principal</button>
        <h1>Lista de seus clientes ativos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Serviço</th>
                    <th>Endereço</th>
                    <th>Dia e Hora</th>
                    <th>Telefone</th>
                    <th>Valor (R$)</th>
                </tr>
            </thead>
            <tbody id="client-list">
                <!-- Os dados serão inseridos pelo JavaScript -->
            </tbody>
        </table>
    </div>
    <script src="js/cliente.js"></script>
</body>

</html>
