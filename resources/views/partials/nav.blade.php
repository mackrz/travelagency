
  <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5" style="margin:auto">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Strona główna</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/pages/about') }}">O firmie</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/news/readmore') }}">Aktualności</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ url('/pages/contact') }}">Kontakt</a></li>
            </ul>
        </div>
    </div>
    <div class= "action_profile">
        <div class="profile" onclick="menuToggle();"><img src="{{asset('/storage/users/default.png')}}"></div>
        @if (Auth::user())
        @auth
        <div class="menu_profile">
            <h3>Moje konto</h3>
            <ul>              
                <li><i class="fa-solid fa-pen-to-square"></i><a href="#">Edytuj profil</a></li>
                <li><i class="fa-solid fa-circle-check"></i><a href="{{ url('/account/myreservation') }}">Rezerwacje</a></li>
                <li><i class="fa-solid fa-gear"></i><a href="#">Ustawienia konta</a></li>
                <li><i class="fa-solid fa-right-from-bracket"></i><a href="#">Wyloguj</a></li>
            </ul>
        </div>
        @endauth
        @else
        <div class="menu_profile">
            <h3>Moje konto</h3>
            <ul>              
                <li><i class="fa-solid fa-pen-to-square"></i><a href="#">Zarejestruj się</a></li>
                <li><i class="fa-solid fa-right-from-bracket"></i><a href="/admin">Zaloguj się</a></li>
            </ul>
        </div>
        @endif
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu_profile');
            toggleMenu.classList.toggle('active')
        }
    </script>
</nav>