<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Perfil da Empresa</title>
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
        <section class="section-prf-empresa">
            <div class="prf-empresa-container">
                <div class="prf-empresa-content">
                    <div class="prf-lSide">
                        <picture>
                            <source src="../img/banner-perfil-empresa.jpg">
                            <img src="../img/banner-perfil-empresa.jpg" alt="Banner da Empresa" class="banner-sample">
                        </picture>
                        <div class="prf-info">
                            <h2 class="prf-info-title">Sobre o provedor:</h2>
                            <button class="btn">CONTATAR</button>
                        </div>
                        <div class="prf-info-text">
                        Somos um dos principais fornecedores de painéis solares do país. Nossa organização tem uma forte posição de mercado em vários estados por causa de nossos serviços eficientes e econômicos. Devido ao nosso desempenho e eficiência, fomos premiados duas vezes pela associação empresarial local. Também fornecemos painéis solares para grandes empresas que estão na indústria da construção. Temos trabalhado com alguns clientes eficientes que já começaram a se beneficiar de nossos serviços. Eles continuam voltando para nós para o fornecimento de produtos solares de qualidade.
                        </div>
                    </div>
                    <div class="prf-rSide">
                        <h1 class="prf-nome-empresa">Empresa de Energia Solar</h1>
                        <picture class="prf-foto">
                            <source src="../img/sol.png">
                            <img src="../img/sol.png" alt="Foto de perfil da empresa" class="imgEmpresa" style="width:10rem">
                        </picture>
                        <div class="prf-avaliacao">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                            <img src="../img/estrela.png" alt="Estrela de avaliação">
                        </div>
                        <h2 class="prf-label">Endereço</h2>
                        <div class="prf-desc-text">Rua Jardim São Lourenço, 36 (Campo Grande)</div>
                        <h2 class="prf-label">Status:</h2>
                        <h2 class="prf-desc-text"><status>Aberta para solicitações</status></h2>
                        <h2 class="prf-label">Disponibilidade:</h2>
                        <div class="btn-cards-disp">
                            <div class="disp-option">Casas</div>
                            <div class="disp-option">Apartamentos</div>
                            <div class="disp-option">Condomínios</div>             
                        </div>
                    </div>
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
    <script type="text/javascript" src="../js/cadUser.js"></script>
    <script type="text/javascript" src="../js/showCadData.js"></script>
</body>

</html>