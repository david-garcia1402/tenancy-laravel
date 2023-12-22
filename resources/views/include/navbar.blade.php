<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-underline">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('forum-escola') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Criar dúvida</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user-escola') }}">Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white px-2" href="#"><span>Inserir matéria</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white px-2" href="#"><span>Estatísticas</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white px-2" href="{{ route('logout-escola') }}"><span>Logout</span></a>
        </li>
        </ul>
    </div>
    </div>
</nav>