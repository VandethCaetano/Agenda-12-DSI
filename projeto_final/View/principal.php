<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Enlatados Juarez</title>

    <!-- SIDEBAR -->
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
        }

        .w3-sidebar {
            width: 120px;
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- NAVEGACAO -->
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-hover-light-grey w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-hover-light-grey w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-hover-light-grey w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>
        </a>
        <a href="#eProfissional" class="w3-bar-item w3-button w3-hover-light-grey w3-text-light-grey">
            <i class="fa fa-briefcase w3-xxlarge"></i>
            <p>Experiência</p>
        </a>
        <a href="#outrasFormacoes" class="w3-bar-item w3-button w3-hover-light-grey w3-text-light-grey">
            <i class="fa fa-book w3-xxlarge"></i>
            <p>Outras Formações</p>
        </a>

    </nav>

    <!-- CONTEUDO -->
    <div class="w3-padding-large" id="main">

        <!-- HOME -->
        <header class="w3-container w3-center" id="home" style=" padding-right: 260px;">
            <img src="../img/Imagem 07.png" alt="Logo" class="w3-image" style="width: 150px;"><br>
            <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
            <h1 class="w3-text-cyan">SISTEMA DE CURRÍCULOS</h1>
        </header>

        <!-- DADOS PESSOAIS -->
        <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
            <h2 class="w3-text-cyan">Dados Pessoais</h2>

            <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-padding" style="width: 70%;">
                <!-- NOME -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-user"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
                    </div>
                </div>

                <!-- DATA NASCIMENTO -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="Data de Nascimento">
                    </div>
                </div>

                <!-- CPF -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-id-card"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF">
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%;">
                        <i class="w3-xxlarge fa fa-envelope"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="E-mail">
                    </div>
                </div>

                <!-- BOTAO  -->
                <div class="w3-row w3-section">
                    <div class="w3-center" style="width:100%;">
                        <button name="btnAtualizar" class="w3-button w3-blue w3-round-large" style="width:70%;">
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- FORMACAO  -->
        <br><br>
        <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
            <h2 class="w3-text-cyan">Formação</h2>

            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">Data Inicial</div>
                    <div class="w3-col" style="width:50%;">Data Final</div>
                </div>

                <!-- DATAS -->
                <div class="w3-row w3-section">
                    <!-- INICIO -->
                    <div class="w3-row w3-section w3-col" style="width:45%;">
                        <div class="w3-col" style="width:15%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date">
                        </div>
                    </div>
                    <!-- FIM -->
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:13%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date">
                        </div>
                    </div>
                </div>

                <!-- DESCRICAO -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
                            placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                    </div>
                </div>
                <!-- BOTAO -->
                <div class="w3-row w3-section">
                    <div class="w3-center" style="width: 100%;">
                        <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 15%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
            </form>


            <!-- TABELA -->
            <div class="w3-container w3-margin" style="width:70%;">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <br><br>
        <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
            <h2 class="w3-text-cyan">Experiência Profissional</h2>

            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">Data Inicial</div>
                    <div class="w3-col" style="width:50%;">Data Final</div>
                </div>

                <!-- DATA-->
                <div class="w3-row w3-section">
                    <!-- INICIO -->
                    <div class="w3-row w3-section w3-col" style="width:45%;">
                        <div class="w3-col" style="width:15%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date">
                        </div>
                    </div>

                    <!-- FIM -->
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:13%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date">
                        </div>
                    </div>
                </div>

                <!-- EMPRESA -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
                    </div>
                </div>

                <!-- DESCRICAO -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                            placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                    </div>
                </div>

                <!-- BOTAO -->
                <div class="w3-row w3-section">
                    <div class="w3-center" style="width:100%;">
                        <button name="btnAddEP" class="w3-button w3-blue w3-round-large" style="width: 15%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- TABELA -->
            <div class="w3-container w3-margin" style="width:70%;">
                <table class="w3-table-all w3-centered">
                    <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Empresa</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>


        <!-- OUTRAS FORMAÇÕES -->
        <br><br>
        <div class="w3-padding-128 w3-content w3-text-grey" id="outrasFormacoes">
            <h2 class="w3-text-cyan">Outras Formações</h2>

            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width:70%;">

                <!-- Rótulos -->
                <div class="w3-row w3-center">
                    <div class="w3-col" style="width:50%;">Data Inicial</div>
                    <div class="w3-col" style="width:50%;">Data Final</div>
                </div>

                <!-- Datas -->
                <div class="w3-row w3-section">
                    <!-- Início -->
                    <div class="w3-row w3-section w3-col" style="width:45%;">
                        <div class="w3-col" style="width:15%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date">
                        </div>
                    </div>

                    <!-- Fim -->
                    <div class="w3-row w3-section w3-rest">
                        <div class="w3-col w3-margin-left" style="width:13%;">
                            <i class="w3-xxlarge fa fa-calendar"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date">
                        </div>
                    </div>
                </div>

                <!-- Descrição -->
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:7%;">
                        <i class="w3-xxlarge fa fa-align-justify"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text"
                            placeholder="Ex.: Curso de Inglês - Inglês City">
                    </div>
                </div>

                <!-- Botão -->
                <div class="w3-row w3-section" style="margin-bottom: 0;">
                    <div class="w3-center" style="width:100%;">
                        <button name="btnAddOF" class="w3-button w3-blue w3-round-large" style="width: 15%;">
                            <i class="w3-xxlarge fa fa-user-plus"></i>
                        </button>
                    </div>
                </div>

                <!-- Tabela -->
                 <div class="w3-container w3-margin" style="width:95%;">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                        </thead>
                      <!------- AGENDA 13-->
                    </table>
                </div>
        </div>
    </div>
</body>
</html>
