<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="David">
    <title>Bem vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
    <meta name="theme-color" content="#161717">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #3b3d3f;
        }

        .form-signin {
            max-width: 350px;
            padding: 15px;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .btn-login {
            background-color: #222425;
            color: #fefefe;
        }

        .btn-login:hover {
            background-color: #161717;
            color: #fefefe;
        }
    </style>
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        @if (Session::has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(Session::has('logout'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ Session::get('logout') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <legend>
            <h1 style="color: white">Fórum escolar</h1>
        </legend>
        <img class="mb-4" src="/assets/logo.png" alt="" width="100%">
        <a href="{{ route('login-escola') }}"><button class="w-100 btn btn-lg btn-login mt-2"
                type="submit">Entrar</button></a>
        <br>
        <a href="{{ route('create-escola') }}"><button class="w-100 btn btn-lg btn-login mt-2"
                type="submit">Registrar</button></a>
    </main>
</body>

</html>
