<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$profile->name}} - Guia da Organização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/728f43781a.js" crossorigin="anonymous"></script>


    <style>
        body {
            background-color: #fefefe;
        }

        .yellow {
            color: yellow;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 100%;
            margin: auto;
            background-color: #fff;
        }

        .profile-description {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 100%;
            margin: auto;
            background-color: #fff;

        }

        .title {

            font-size: 18px;
        }

        .btn-carousel {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px;
            color: white;
            background-color: #ff5ebc;
            cursor: pointer;
            font-size: 12px;
            border-radius: 10px;
            margin: 0 10px;
        }

        button.btn-profile {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px;
            color: white;
            background-color: #ff5ebc;
            cursor: pointer;
            width: 90%;
            font-size: 18px;
            border-radius: 10px;
            margin: 0 10px;
        }

        button.btn-profile-muted {
            border: 1px solid #6c757d;
            text-decoration: line-through;
            outline: 0;
            display: inline-block;
            padding: 10px;
            color: #6c757d;
            background-color: #fefefe;
            cursor: pointer;
            width: 90%;
            font-size: 18px;
            border-radius: 10px;
            margin: 0 10px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: #ff5ebc;
            /*Original #fa3d8e #ff5ebc*/
        }

        footer {
            color: #ff5ebc;
        }


        button:hover,
        a:hover {
            opacity: 0.7;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.4);
        }

        .navbar-toggler:focus {
            border: 0 !important;
            box-shadow: none !important;
        }

        .navbar-toggler {
            border: 0 !important;
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,94,188,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        header#cabecalho img#logo {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <header id="cabecalho"
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 mx-auto">
            <button class="navbar-toggler custom-toggler mx-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/"
                class="ml-5 float-center d-flex mx-auto align-items-center text-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="rounded mx-auto d-block" id="logo" src="/img/logo_320_100.png" width="200px">
            </a>

            <div class="col-md-3 text-end mx-2">
                <div class="dropdown text-end">
                    <a href="#" class=" link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('storage/profiles/clarissa2.jpeg')}}" alt="mdo" class="rounded-circle" width="32" height="32">
                    </a>
                    <ul class="dropdown-menu border-0 text-small text-end rounded-0">
                        <li><a class="nav-link px-2 text-dark" href="#">Editar Perfil</a></li>
                        <li><a class="nav-link px-2 text-dark" href="#">Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="nav-link px-2 text-dark" href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <a class="navbar-brand mx-auto" href="#"><img src="/img/logo_320_100.png" width="200px"></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end ">
                <li><a href="/" class="nav-link px-2 text-dark text-break">Home</a></li>
                <li><a href="profile" class="nav-link px-2 text-secondary">Personal Organizer</a></li>                
                <li><a href="#" class="nav-link px-2 text-dark text-break">Lojas</a></li>
                <li><a href="#" class="nav-link px-2 text-dark text-break">Cursos</a></li>
                <li><a href="#" class="nav-link px-2 text-dark text-break">Planos</a></li>
            </ul>
        </div>
    </div>

    <section id="carrousel ">
        <div class="container-fluid ">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img src="{{ asset('storage/banners/c1.png') }}" class="rounded-3 d-block w-100" alt="...">
                        <div class="container-fluid ">
                            <div class="carousel-caption text-start p-3">
                                <h4>Clube PO.</h4>
                                <p>Faça parte do maior ecossistema de organização a América Latina.</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('storage/banners/c2.png') }}" class="rounded-3 d-block w-100" alt="...">
                        <div class="container-fluid ">
                            <div class="carousel-caption text-start p-3">
                                <h4>Exemplo de chamada para parceiro.</h4>
                                <p>Aqui uma descrição da campanha</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/banners/c3.png') }}" class="rounded-3 d-block w-100" alt="...">
                        <div class="container-fluid">
                            <div class="carousel-caption text-start p-3 ">
                                <h4>Exemplo de chamada para parceiro.</h4>
                                <p>Aqui uma descrição da campanha</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('storage/banners/c4.png') }}" class="rounded-3 d-block w-100" alt="...">
                        <div class="container-fluid">
                            <div class="carousel-caption text-start p-3">
                                <h4>Exemplo de chamada para parceiro.</h4>
                                <p>Aqui uma descrição da campanha</p>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <section id="profile">
        <div class="container-fluid mt-3 mb-3">
            <div class="row">
                <div class="col-md-4">
                    <div class="card rounded-3 p-3 text-center">
                        <h1>{{ $profile->name }}</h1>
                        <p class="title">Fundadora Guia da Organização</p>
                        <p>{{ $profile->location }}</p>
                        <p class="">
                            <span class="m-2 small text-secondary">Avaliação:</span>
                            <i class="fa-solid fa-star yellow"></i>
                            <i class="fa-solid fa-star yellow"></i>
                            <i class="fa-solid fa-star yellow"></i>
                            <i class="fa-solid fa-star yellow"></i>
                            <i class="fa-solid fa-star yellow"></i>
                        </p>
                        <img src="{{ asset('storage/profiles/clarissa2.jpeg')}}" alt="Clarissa" style="width:100%" class="rounded-3 mb-2 mt-2">

                        <p><button class="btn-profile"><i class="fa-solid fa-chalkboard-user"></i> Visualizar
                                Cursos</button></p>
                        <p><button class="btn-profile"><i class="fa-solid fa-cart-shopping"></i> Visualizar
                                Produtos</button></p>
                        <p><button class="btn-profile"><i class="fa-solid fa-camera"></i> Galeria de Fotos</button></p>
                        <p><button class="btn-profile"><i class="fa-solid fa-phone"></i> Contato</button></p>
                        <p><button type="button" class="btn-profile-muted btn-lg" id="liveToastBtn"><i
                                    class="fa-solid fa-crown yellow"></i> Botão desligado </button> </p>

                    </div>
                    

                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">                                
                                <strong class="me-auto"> <i
                                    class="fa-solid fa-crown yellow"></i> Funcionalidade VIP</strong>                                
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Esta opção está disponível para o plano VIP. Clique <a href="" class="small">aqui</a> para mais informações
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 ">
                    <div class="h-100 p-5 rounded-3 profile-description">
                        <p class="text-start fs-1 fw-bold">Descrição</p>
                        <p>{{ $profile->description }}</p>
                        <p class="text-center"><button class="w-100 btn-profile" type="button">Algum botão
                                exemplo</button></p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <img src="/img/logo-100-100.png" width="100px">
                </a>

            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li class="ms-3"><a class="" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="" href="#"><i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }


    </script>
</body>

</html>
