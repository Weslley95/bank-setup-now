<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bank Setup Now</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{asset('ico_bank.ico')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="text-center text-white bg-info">
    <!-- Responsive navbar-->
    <nav class="navbar justify-content-center" style="background-color: #1e8495;">
        <a class="btn btn-sm btn-light m-1 " href="/dash">Dashboard</a>
        <a class="btn btn-sm btn-light m-1" href="/economia">Cotações</a>
        <a class="btn btn-sm btn-light m-1" href="/close">Fechamentos</a>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="container mb-2 mt-5">
        <div class="text-center">
            <img src="{{asset('bank_setup_now.png')}}" class="rounded" alt="Logo" style="width: 300px;">
        </div>
    </header>
    <!-- Content section-->
    <section class="py-5">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg>
                    <h2>Cadastro</h2>
                    <p>Cadastre seus clientes e tenha possibilidade de expandir recursos internos para sua necessidade.</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                        <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                    </svg>
                    <h2>Bank</h2>
                    <p>Breve demonstração de recursos básicos, com possibilidade de agregar novas funcionalidades ao sistema.</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                    </svg>
                    <h2>Expansão</h2>
                    <p>Atribua moedas virtuais a sua empresa e expanda seus recursos internos para o mercado financeiro e comercial.</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="fixed-bottom pt-1" style="background-color: #1e8495;">
        <a class="btn btn-outline-light btn-sm" href="https://github.com/Weslley95/data-controllers" target="_blank" role="button">
            <i class="bi bi-github"></i>
        </a>
        <p class="text-center text-white">Copyright © 2021 Bank Setup Now</p>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>