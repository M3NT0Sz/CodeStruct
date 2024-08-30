<button?php
    session_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./CSS/style.css" />
        <link rel="shortcut icon" href="./Imagens/Logo.png" type="image/x-icon" />
        <title>CodeStruct - Jornada</title>
    </head>

    <body class="bodyJogo">
        <main class="jogoTudo">
            <nav class="menuEsquerda">
                <section class="imgJogo">
                    <img src="./Imagens/MatheusMendes.jpeg">
                </section>
                <section class="configuracaoJogo">
                    <a href="../index.php"><button class="JogarBtn">Jogar</button></a>
                    <a href="../index.php"><button>Configurações</button></a>
                    <a href="../index.php"><button>Voltar</button></a>
                </section>
            </nav>
            <main class="jogoDireita">
                <nav class="cimaJogo">
                    <img src="./Imagens/Logo.png" />
                    <h1>CodeStruct</h1>
                </nav>
                <main class="personagem">
                    <section class="trilhasTudo">
                        <ul class="trilhaUL">
                            <button id="toggleTAD">TAD</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasTAD" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                        <ul class="trilhaUL">
                            <button id="toggleLSE">Listas Simplesmente Encadeadas</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasLSE" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                        <ul class="trilhaUL">
                            <button id="toggleLDE">Listas Duplamente Encadeadas</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasLDE" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                        <ul class="trilhaUL">
                            <button id="toggleFIFO">Fila FIFO</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasFIFO" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                        <ul class="trilhaUL">
                            <button id="togglePri">Fila de Prioridades</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasPri" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                        <ul class="trilhaUL">
                            <button id="togglePil">Pilhas</button> <!-- Título clicável para abrir/fechar a lista -->
                            <div id="trilhasPil" class="trilhas">
                                <li>Trilha 1</li>
                                <li>Trilha 2</li>
                                <li>Trilha 3</li>
                                <li>Trilha 4</li>
                                <li>Chefão</li>
                            </div>
                        </ul>
                    </section>
                </main>
            </main>
        </main>
        <script src="./JS/trilha.js"></script>
    </body>

    </html>