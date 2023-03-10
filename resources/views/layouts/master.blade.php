<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <style>
            html{
                font-family: cursive;
            }
            .nav{
                display: flex;
                gap:2rem;
            }
            a{
                text-decoration :none;
                border: 1px solid red;
                padding: .5rem 1rem;
                color:green;
                border-radius:50px;
            }

            a:hover{
                background:gray;
                /* color:black; */
                color:white;
            }
        </style>
    </head>
    <body>
        <h1>Laravel 101</h1>
      <div class="nav">
            <div >
                <a href="/contact-us">Contactez-nous</a>
                <a href="about-us">A propos de nous</a>
                <a href="/articles">Articles</a>
                <a href="/form">Ecrire un article</a>
            </div>
            <div>
                @guest
                    <a href="{{ route('register') }}">Créer un compte</a>
                    <a href="{{ route('login') }}">Login</a>
                @endguest
            </div>
            <div>
                @auth
                    <a href="{{ route('profile') }}">Votre profil</a>
                    <form action="{{ route('logout') }}" method="POST">
                        <input type="submit" value="Se déconnecter">
                    </form>
                @endauth
            </div>
      </div>


       @include('messages.success')
       @yield('content')
       @yield('about')
       @yield('formulaire')
       @yield('login')


    </body>
</html>