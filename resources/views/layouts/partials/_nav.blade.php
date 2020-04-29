<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Reussite total ! Pourquoi pas Vous</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('acceuille')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Voiture')}}">Location de Voiture</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('immobilier')}}">Maison à louer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">Mieux nous connaitre</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Connexion</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('afficherTout')}}">supprimer annonces</a>
          </li>
          <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <div class="pa ba">
    <section class=" text-center ba">
      <div class=" ba">
        <h1>A3VT AGENCE WANE VOYAGES TRANSIT IMMOBILIER</h1>
      <img src="{{asset('ag.png')}}" alt="" height="400" width="100%">
          <a href="{{route('Voiture')}}" class="btn btn-primary my-2">Vous voulez louer une voiture</a>
          <a href="{{route('immobilier')}}" class="btn btn-secondary my-2">Vous voulez louer ou acheter une maison</a>
         @guest
         @else
         <a href="{{route('home')}}" class="btn btn-secondary my-2">Publier</a>
         @endguest
      </div>
    </section>
  </div>

    <!--  <img class="ac" src="ag.png" height="400px" width="100%"> -->
