<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Busca por Provedores</title>
</head>

<body>
    <nav id="navbar">
        <div class="logo">
            <a href="index.php"><img src="../img/voltaic_logo_secundario_fundo_preto.png" alt="logo da Voltaic Technology"></a>
        </div>
        <div class="nav-items">
            <ul class="nav-links">
                <li><a href="index.php">Página inicial</a></li>
                <li><a href="solicitacao.php">Solicite agora</a></li>
                <li><a href="buscaprovedores.php">Provedores</a></li>
                <a href="login.php"><button class="btn">Entrar</button></a>
            </ul>
        </div>
    </nav>
    <main>
        <section class="sectionBuscaProv">
            <div class="buscaProvContainer">
                <div class="buscaProvContent">
                    <div class="buscaProvTitle">Procure por provedores em sua região...</div>
                    <div class="buscaProvStart">
                        <input type="text" placeholder="Busque pelo nome da empresa que desejar" name="buscaProv" id="buscaProv" class="cadInput buscaProvInput">
                        <button class="btnFiltro" id="btnFiltro">Filtrar</button>
                    </div>
                    <div class="buscaProvSubtitle">Resultados encontrados:</div>
                    <div id="modalFiltro" class="modal">
                                <div class="modal-filtro-content">
                                    <span id="closeModal" class="close">&times;</span>
                                    <div class="entireModal">
                                        <form>
                                            <div class="upSideModal">
                                                <div class="modal-title">
                                                    <h1>Opções de Filtro</h1>
                                                </div>
                                            </div>
                                            <div class="downSideModal">
                                                <div class="section-filtro">
                                                    <div class="options-filtro">
                                                        <div class="title-filtro">
                                                            Distância:
                                                        </div>
                                                        <div class="option">
                                                            <input type="radio" id="dist1" name="distancia" value="8">
                                                            <label class="lblRadioFilter" for="dist1">Até 8km</label><br>
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="dist2" name="distancia" value="15">
                                                            <label class="lblRadioFilter" for="dist2">Entre 9 e 15km</label><br>  
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="dist3" name="distancia" value="20">
                                                            <label class="lblRadioFilter" for="dist3">Entre 16 e 20km</label><br>
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="dist4" name="distancia" value="20-25km">
                                                            <label class="lblRadioFilter" for="dist4">Entre 20 e 25km</label><br>
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="dist5" name="distancia" value="+25km">
                                                            <label class="lblRadioFilter" for="dist5">Mais de 25kma</label><br>
                                                        </div>
                                                    </div>
                                                    <div class="options-filtro">
                                                        <div class="title-filtro">
                                                            Avaliações
                                                        </div>
                                                        <div class="option">
                                                            <input type="radio" id="1star" name="avaliacoes" value="1">
                                                            <label class="lblRadioFilter" for="1star">1 estrela</label><br>
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="2star" name="avaliacoes" value="2">
                                                            <label class="lblRadioFilter" for="2star">2 estrelas</label><br>  
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="3star" name="avaliacoes" value="3">
                                                            <label class="lblRadioFilter" for="3star">3 estrelas</label><br>
                                                        </div>

                                                        <div class="option">
                                                            <input type="radio" id="4star" name="avaliacoes" value="4">
                                                            <label class="lblRadioFilter" for="4star">4 estrelas</label><br>
                                                        </div>
                                                        <div class="option">
                                                            <input type="radio" id="4star" name="avaliacoes" value="5">
                                                            <label class="lblRadioFilter" for="5star">5 estrelas</label><br>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <input type="submit" class="btn filterBtn" value="Aplicar">
                                        </form>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </section>
        <section class="sectionBuscaProv">
            <div class="buscaProvResultados">
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor1">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor2">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor3">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor4">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
            </div>
            <div class="buscaProvResultados2">
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor5">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor6">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor7">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor8">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
            </div>
            <div class="buscaProvResultados3">
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor1">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor2">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <div class="banner-empresa" id="bColor3">
                        <figure class="img-banner">
                            <source src="../img/raio.png">
                            <img src="../img/raio.png" alt="Logo da empresa" class="imgEmpresa">
                        </figure>
                    </div>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
                <div class="card-empresa">
                    <a href="perfilempresa.php">
                        <div class="banner-empresa" id="bColor4">
                            <figure class="img-banner">
                                <source src="../img/sol.png">
                                <img src="../img/sol.png" alt="Logo da empresa" class="imgEmpresa">
                            </figure>
                        </div>
                    </a>
                    <h2 class="nome-empresa">Empresa de Energia Solar</h2>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/voltaic.technolgy/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/massoladb/voltaic-reformed" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com/VoltaicDS" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/100088201811934/" target="_blank"><i class="fab fa-facebook"></i></a>
        </div>

        <ul class="list">
            <li><a href="index.php">Página Inicial</a></li>
            <li><a href="index.php#sobreNos">Sobre</a></li>
            <li><a href="#">Termos de Uso</a></li>
            <li><a href="#">Política de privacidade</a></li>
        </ul>

        <p class="copyright">Voltaic Technology © 2022</p>
    </footer>
    <script type="text/javascript" src="../js/modalFiltro.js"></script>
    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
</body>

</html>