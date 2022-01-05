<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <!-- JS -->
    <script src="/js/script.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- FONTS GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Roboto:wght@100;300&display=swap" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/a4d27c270e.js" crossorigin="anonymous"></script>
</head>

<body>
    @yield('content')
    <header class="menu">
        <div class="container">
            <div class="row">
                <div class="menuu">
                    <div class="col-9">
                        <a href="/">
                            <h3 class="logo">Blog da Alma</h3>
                        </a>
                    </div>
                    <div class="col-3">
                        <form action="/" method="GET" class="pesquisar">
                            <input type="search" class="form-control search" name="pesquisa" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="search-addon" />
                            <button class="pesquisar-b" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="footer">
            <p>Todos os direitos reservados a Blog da Alma</p>
        </div>
    </footer>

</body>

</html>