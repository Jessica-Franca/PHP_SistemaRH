<!DOCTYPE html>
<html lang="pt">

<head>
    <?php include_once('./paginasIndex/head.php'); ?>
</head>

<body>
    <!-- Example Code criar barra de home navegação -->
    <nav class="navbar bg-black navbar-expand-md  navbar-dark border-body" data-bs-theme="dark">
    <!--<nav class="navbar bg-dark  border-bottom border-body" data-bs-theme="dark"> -->
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <h1 class="d-block m-0"><img class="icon" src="./imagens/undraw_People_re_8spw.png" alt="Logo"></h1>
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paginas/SolicitacaoFerias.php">Férias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paginas/hierarquia.php">Hierarquia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paginas/status.php">Status</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Faça sua pesquisa" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <script>
        // Função para verificar se a página atual é a mesma do link
        function isPageActive(page) {
            return window.location.pathname === page;
        }
    </script>

</body>

</html>