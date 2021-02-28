<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    
    <!--Custom styles-->
    
    <link type="text/css" rel="stylesheet" href="{{ asset('../resources/css/materialize.min.css') }}"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href= "{{ asset('../resources/css/styles.css') }}"  media="screen,projection"/>

    <title>Cagnot'potes</title>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="white">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo center">Cagnot'Potes</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ URL::to('campaign/new') }}" class="waves-effect waves-light btn pink lighten-1">Créer une campagne</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="{{ URL::to('campaign/new') }}" class="waves-effect waves-light btn pink lighten-1">Créer une campagne</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
    @yield('content')
    
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Cagnot'Potes</h5>
                    <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo.</p>
                </div>
                <div class="col l3 s12 offset-l3">
                    <h5 class="white-text">Liens</h5>
                    <ul class="footer-links">
                        <li><a class="white-text" href="#!">Comment ça marche ?</a></li>
                        <li><a class="white-text" href="#!">Voir les campagnes</a></li>
                        <li><a class="white-text" href="#!">Créer une campagne</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made with love by <a class="white-text" href="http://trombi.simplon-roanne.com/">Simplon Roanne</a>
            </div>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
        <!--Init & custom scripts-->
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </footer>
    
</body>
</html>
