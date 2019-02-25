<!doctype html>
<html lang='{{ app()->getLocale() }}'>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='csrf-token' content='{{ csrf_token() }}'>
    <title>@yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='{{ mix('/css/app.css') }}'>
    <style>
        @media only screen and (min-width: 992px) {
            header ul.nav {
                float: right;
            }
        }
    </style>
    @yield('css')
</head>
<body>
<div id='app' class='container'>
    <header class='clearfix'>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Menü</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class='navbar-left' href='{{route('start')}}' title='Startseite'><img src='{{asset('img/logo.jpg')}}'
                                                                                         alt=''/></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class='nav navbar-nav'>
                    <li class='active'><a href='{{route('start')}}' title='Startseite' data-menu='/'>Start <span
                                    class="sr-only">(current)</span></a></li>
                    <li><a href='{{route('shop')}}' title='Shop' data-menu='/shop'>Shop</a></li>
                    <li><a href='{{route('ueber-uns')}}' title='Über Uns' data-menu='/ueber-uns'>Über Uns</a></li>
                    <li><a href='{{route('systeme')}}' title='Systeme' data-menu='/systeme'>Systeme</a></li>
                    <li><a href='{{route('kabinenwaechter')}}' title='Kabinenwächter' data-menu='/kabinenwaechter'>Kabinenwächter</a>
                    </li>
                    <li><a href='{{route('kontakt')}}' title='Kontakt' data-menu='/kontakt'>Kontakt</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('main')
    <footer class='container'>
        &copy; 2017 OHLAND-Warensicherungs-Technologie <span class='pull-right'><a href='{{route('impressum')}}'
                                                                                   title='Impressum'>Impressum</a></span>
    </footer>
</div>
<script src='{{ mix('/js/app.js') }}'></script>
@yield('js')
</body>
</html>
