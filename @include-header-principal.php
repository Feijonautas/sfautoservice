<style>
    .header-principal .nav-item{
        border-radius: 5px;
    }
    .header-principal .nav-item:hover{
        background-color: #e54b59;
    }
    .header-principal .nav-item:hover .nav-link{
        color: #fff;
    }
</style>
<header class="bg-light header-principal">
    <div class="container-fluid d-flex flex-column flex-md-row justify-content-center p-3">
        <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-start align-items-center pb-4 pb-md-0">
            (41) 3030-3030<br>
            (41) 3030-3030<br>
            Redes sociais
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <img style="width: 200px; height: 80px; background-color: #eee;">
        </div>
        <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end align-items-center pt-4 pt-md-0">
            <button type="button" class="btn btn-danger btn-md">FAÇA UM ORÇAMENTO</button>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #eee">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-uppercase font-weight-bold" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">Página inicial</a>
                </li>
                <li class="nav-item px-3 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Serviços
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="servicos.php?id=1">Serviço 1</a>
                        <a class="dropdown-item" href="servicos.php?id=2">Serviço 2</a>
                        <a class="dropdown-item" href="servicos.php?id=3">Serviço 3</a>
                    </div>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="sobre-nos.php">Sobre nós</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>