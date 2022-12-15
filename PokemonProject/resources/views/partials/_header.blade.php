<!-- start header area -->
<!-- Start Header -->
<header class="rn-header haeder-default header--sticky">
    <div class="container">
        <div class="header-inner">
            <div class="header-left">
                <div class="logo-thumbnail logo-custom-css">
                    <a class="logo-light" href="index.html"><img src="assets/images/pokemon/logo-white.png"></a>
                    <a class="logo-dark" href="index.html"><img src="assets/images/pokemon/logo-dark.png"
                        ></a>
                </div>
                <div class="mainmenu-wrapper">
                    <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/pokemons">Pokémon</a></li>
                            <li><a href="/combat">Combats</a></li>
                            <li><a href="contact.html">Stats</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                </div>
            </div>
            <div class="header-right">
                <div class="setting-option rn-icon-list d-block d-lg-none">
                    <div class="icon-box search-mobile-icon">
                        <button><i class="feather-search"></i></button>
                    </div>
                    <form id="header-search-1" action="#" method="GET" class="large-mobile-blog-search">
                        <div class="rn-search-mobile form-group">
                            <button type="submit" class="search-button"><i class="feather-search"></i></button>
                            <input type="text" placeholder="Search ...">
                        </div>
                    </form>
                </div>

                <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                    <div class="icon-box">
                        @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" id="connectbtn" class="btn btn-primary-alta btn-small" href="/login"><i
                                        class="feather-user"></i>
                                    Se déconnecter</button>
                            </form>

                        @else
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="/login"><i
                                    class="feather-user"></i>
                                Se connecter</a>
                        @endauth
                    </div>
                </div>

                <div class="setting-option mobile-menu-bar d-block d-xl-none">
                    <div class="hamberger">
                        <button class="hamberger-button">
                            <i class="feather-menu"></i>
                        </button>
                    </div>
                </div>

                {{--                <div id="my_switcher" class="my_switcher setting-option" >--}}
                @auth
                    <div id="my_switcher">
                        <ul>

                            {{--                        <li>--}}
                            <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                {{auth()->user()->name}}
                                {{--                                <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">--}}
                            </a>
                            {{--                        </li>--}}
                        </ul>
                    </div>
                @endauth

            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo logo-custom-css">
                <a class="logo-light" href="index.html"><img src="assets/images/logo/logo-white.png"></a>
                <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo-dark.png"></a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="feather-x"></i>
                </button>
            </div>
        </div>
        <nav>
        </nav>
    </div>
</div>
<!-- ENd Header Area -->
