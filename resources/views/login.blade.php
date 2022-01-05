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

    <div class="container" style="align-items: center; justify-content: center; display: flex;">
        <div class="login">
            <form action="{{route('auth.user')}}" method="GET">
                @csrf
                <div class="logo" style="align-items: center; justify-content: center; display: flex;">
                    <h3 class="logo">Blog da Alma</h3>
                </div>
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" class="form-control email" id="nome" name="nome" placeholder="Digite seu usuário">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control senha" id="passoword" name="senha" placeholder="Digite sua senha">
                </div>
                <div style="align-items: center; justify-content: center; display: flex;">
                    <button type="submit" class="btn btn-dark botao-l">Entrar</button>
                </div>
            </form>

        </div>
    </div>