<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  @livewireStyles
</head>




<body>
    <header>
        @if(Route::has('login'))
                @auth
                @if(Auth::user()->utype === 'ADM')
                    <!-- //Admin -->


                        <div class="top-nav flex container  justify-content-between padding-35" style="border-bottom: 1px solid black;">

                            <a href="/" class="dashboard">
                                <h1>My Account ({{Auth::user()->name}})</h1>
                            </a>
                            <ul class="navigation-link-dashboard flex align-items-center justify-content-between">
                                <li>
                                    <a href="{{route('admin.categories')}}">Categories</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.products')}}">All Product</a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                        Se déconnecter
                                    </a>
                                </li>
                                <form id="logout-form" method="POST" action = "{{route('logout')}}">
                                    @csrf

                                </form>


                            </ul>

                        </div>


                @else

                <!-- //Normal User -->
                    <div class="top-nav flex container  justify-content-between padding-35" style="border-bottom: 1px solid black;">

                        <a href="/" class="dashboard">
                            <h1>My Account({{Auth::user()->name}})</h1>
                        </a>
                        <ul class="navigation-link-dashboard  flex align-items-center" style = "display: flex;place-content: flex-end;">

                            <li>
                                    <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                                        Se déconnecter
                                    </a>
                            </li>
                            <form id="logout-form" method="POST" action = "{{route('logout')}}">
                                @csrf

                            </form>
                        </ul>

                    </div>

                @endif

            @else
                    <div class="container flex align-items-center padding-35 justify-content-between" style="border-bottom: 1px solid black;">
                        <div class="navigation flex align-items-center">
                        </div>
                        <div class="admin-login flex "  >
                            <a href="{{route('login')}}" class="nav-link">Se connecter</a>
                            <a href="{{route('register')}}" class="nav-link">S'enregitrer</a>
                        </div>

                    </div>

            @endif

        @endif
        <div class="container flex align-items-center padding-35 justify-content-between">
            <div class="navigation flex align-items-center">
                <a href="/" class="logo">
                <h1>We Fashion</h1>
                </a>
                <nav>
                <ul class="navigation-link flex align-items-center">
                    <li><a href="/solde" class="nav-link">Solde</a></li>
                    <li><a href="/homme" class="nav-link">Homme</a></li>
                    <li><a href="/femme" class="nav-link">Femme</a></li>
                </ul>
                </nav>
            </div>

        </div>
    </header>











        {{$slot}}


  <footer style="margin-top: 60px;">

    <div class="footer-content flex container justify-content-between padding-35">
      <div class="footer-grp">
        <h3>Informations</h3>
        <ul class="footer-links">
          <li><a href="#">Mentions légales</a></li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Fabrication</a></li>
        </ul>
      </div>

      <div class="footer-grp">
        <h3>Service Client</h3>
        <ul class="footer-links">
          <li><a href="#">Contactez Nous</a></li>
          <li><a href="#">Livraison & Retour</a></li>
          <li><a href="#">Conditions de Vente</a></li>
        </ul>
      </div>

      <div class="footer-grp">
        <h3>Informations</h3>
        <ul class="footer-links">
          <li><a href="#"><img  src="{{asset('./assets/images/facebook-square-brands.svg')}}" alt=""></a></li>
          <li><a href="#"><img src="{{asset('./assets/images/instagram-square-brands.svg')}}" alt=""></a></li>
          <li><a href="#">Inscrivez vous à la newsletter</a></li>
        </ul>
      </div>
    </div>
  </footer>
  @livewireScripts
</body>
</html>
