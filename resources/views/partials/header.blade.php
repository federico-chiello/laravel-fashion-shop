<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Prodotti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('pagina_contatti') }}">Contatti</a>
                  </li>
                </ul>
              </div>
        </div>
      </nav>
</header>