<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Define a codificação de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Define o viewport para responsividade -->
    <title>Perfil do funcionário</title>
    <!-- Link para o arquivo CSS customizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Título da página -->
    <link rel="stylesheet" href="css/editar.css">
    <!-- Link para o CSS do Bootstrap -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <!-- Script para decodificação de e-mail protegidos -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Script do jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script do Bootstrap -->
    <script type="text/javascript"></script>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

</head>

<body>
    <div class="container light-style flex-grow-3 container-p-y">
        <!-- Container principal com estilo leve -->
        <h4 class="font-weight-bold py-3 mb-4">
            <!-- Título da seção -->
            Configurações de Conta
        </h4>
        <div class="card overflow-hidden">
            <!-- Card para encapsular o conteúdo -->
            <span class="border border-success"></span>
            
            <div class="row no-gutters row-bordered row-border-light">
                <!-- Linha sem espaçamento e com bordas claras -->
                <div class="col-md-3 pt-0">
                    <!-- Coluna de largura média de 3 colunas com padding-top zero -->

                    <!-- Grupo de links para navegação das configurações da conta -->
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-geral">Geral</a>
                        <!-- Link para a aba "General" com a classe active -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-alterar-senha">Alterar senha</a>
                        <!-- Link para a aba "Alterar senha" -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-informações">Informações</a>
                        <!-- Link para a aba "Informações" -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-links-sociais">Links sociais</a>
                        <!-- Link para a aba "links sociais" -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-conexões">Conexões</a>
                        <!-- Link para a aba "Conexões" -->
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-notificações">Notificações</a>
                        <!-- Link para a aba "Notificações" -->
                    </div>
                </div>

                <div class="col-md-9">
                    <!-- Coluna de largura média de 9 colunas -->
                    <!-- CONTEUDO DAS ABAS -->
                    <div class="tab-content">
                       <!-- Aba "Geral" -->
                        <div class="tab-pane fade active show" id="account-geral">
                            <div class="card-body media align-items-center">
                                <!-- Corpo do card com mídia alinhada ao centro -->
                                <img src="img/editar/icon.jpg" alt class="d-block ui-w-80">
                                <!-- Imagem de avatar -->
                                <div class="media-body ml-4">
                                    <!-- Corpo da mídia com margem à esquerda -->
                                    <label id="btn-outline" class="btn btn-outline-primary"> Upload nova foto
                                        <input type="file" class="account-settings-fileinput">
                                        <!-- Input para upload de foto -->
                                    </label>
                                    <button type="button" class="btn btn-default md-btn-flat">Escolher outra</button>
                                    <!-- Botão para resetar -->
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Nome de usuário</label>
                                    <input type="text" class="form-control mb-1">
                                    <!-- Campo de texto para o nome de usuário -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nome</label>
                                    <input type="text" class="form-control">
                                    <!-- Campo de texto para o nome -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" placeholder="---------------@gmail.com">
                                    <!-- Campo de texto para o e-mail -->
                                    <div class="alert alert-success mt-3">
                                        <!-- Alerta de aviso -->
                                        Seu e-mail não foi confirmado. Por favor, verifique sua caixa de entrada.
                                        <a href="javascript:void(0)">Reenviar confirmação</a>
                                        <!-- Link para reenviar confirmação -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Empresa</label>
                                    <input type="text" class="form-control" >
                                    <!-- Campo de texto para o nome da empresa -->
                                </div>
                            </div>
                        </div>

                        <!-- Aba "Aterar senha" -->
                        <div class="tab-pane fade" id="account-alterar-senha">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Senha atual</label>
                                    <input type="password" class="form-control">
                                    <!-- Campo de senha para a senha atual -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nova senha</label>
                                    <input type="password" class="form-control">
                                    <!-- Campo de senha para a nova senha -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label"> Repita a nova senha</label>
                                    <input type="password" class="form-control">
                                    <!-- Campo de senha para repetir a nova senha -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-informações">
                            <!-- Aba "Informações" -->
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Biografia</label>
                                    <input type="text" class="form-control">
                                    <!-- Campo de texto para a biografia -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Aniversário</label>
                                    <input type="text" class="form-control" placeholder="__/__/____">
                                    <!-- Campo de texto para a data de aniversário -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Município</label>
                                    <select class="custom-select">
                                        <!-- Campo de seleção para o Município -->
                                        <option>Serra</option>
                                        <option>Vitória</option>
                                        <option>Vila Velha</option>
                                        <option>Cariacica</option>
                                        <option>Viana</option>
                                        <option>Guarapari</option>
                                        <option>Fundão</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contatos</h6>
                                <!-- Subtítulo "Contacts" -->
                                <div class="form-group">
                                    <label class="form-label">Telefone</label>
                                    <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx">
                                    <!-- Campo de texto para o telefone -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Telefone de urgência</label>
                                    <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx">
                                    <!-- Campo de texto para o telefone de urgência -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-links-sociais">
                            <!-- Aba "Links sociais" -->
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/user">
                                    <!-- Campo de texto para o Twitter -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/user">
                                    <!-- Campo de texto para o Facebook -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Google</label>
                                    <input type="text" class="form-control">
                                    <!-- Campo de texto para o Google+ -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control">
                                    <!-- Campo de texto para o LinkedIn -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control"  placeholder="https://www.instagram.com/user">
                                    <!-- Campo de texto para o Instagram -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-conexões">
                            <!-- Aba "Conexões" -->
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body">
                                <h5 class="mb-2">
                                    <!-- Subtítulo -->
                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i
                                            class="ion ion-md-close"></i> Remover</a>
                                    <!-- Link para remover conexão -->
                                    <i class="ion ion-logo-google text-google"></i>
                                    <!-- Ícone do Google --> Você está conectado ao Google:
                                </h5>
                                <a href="/cdn-cgi/l/email-protegido" class="__cf_email__"
                                    data-cfemail="f9979498818e9c9595b994989095d79a9694">[email&#160;protegido]</a>
                                <!-- E-mail protegido -->
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-twitter">Conectar ao
                                    <strong>Twitter</strong></button>
                                <!-- Botão para conectar ao Twitter -->
                            </div>
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body">
                                <button type="button" class="btn btn-facebook">Conectar ao
                                    <strong>Facebook</strong></button>
                                <!-- Botão para conectar ao Facebook -->
                            </div>
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body">
                                <button type="button" class="btn btn-instagram">Conectar ao
                                    <strong>Instagram</strong></button>
                                <!-- Botão para conectar ao Instagram -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account-notificações">
                            <!-- Aba "Notificações" -->
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Atividade</h6>
                                <!-- Subtítulo "Atividade" -->
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" >
                                        <!-- Input de checkbox para notificações -->
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Envie-me um e-mail quando quiserem me contratar</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" >
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Envie-me um e-mail quando houver cancelamento.</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Envie-me um e-mail quando chegar alguma mensagem do cliente.</span>
                                    </label>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <!-- Linha horizontal -->
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Aplicação</h6>
                                <!-- Subtítulo "Aplicação" -->
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input" >
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Notícias e anúncios</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Atualizações semanais de produtos</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="switcher">
                                        <input type="checkbox" class="switcher-input">
                                        <span class="switcher-indicator">
                                            <span class="switcher-sim"></span>
                                            <span class="switcher-não"></span>
                                        </span>
                                        <span class="switcher-label">Resumo semanal das atividades realizadas</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
            <!-- Botões de ação -->
            <button type="button" class="btn btn-primary">
                <a href="perfil_trabalhador.php">Salvar alterações</a>    
            </button>
            <!-- Botão para salvar alterações -->
            <button type="button" class="btn btn-default">
                <a href="perfil_trabalhador.php">Cancelar</a>
            </button>
            <!-- Botão para cancelar -->
        </div>
    </div>
</body>

</html>
