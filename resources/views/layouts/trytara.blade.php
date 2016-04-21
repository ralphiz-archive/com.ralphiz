<!DOCTYPE html>
<html>
    <head>
        <title>
            TryTara
        </title>
        <link rel="stylesheet" type="text/css" href="/css/app.css"/>
        <link rel="stylesheet" type="text/css" href="/css/jquery.bootgrid.min.css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="#">
                        TryTara
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href={{ route('home') }}>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href={{ route('about') }}>
                                About
                            </a>
                        </li>
                        <li>
                            <a href={{ route('contact' ) }}>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </nav>

        @yield('content')
        
        <script src="/js/app.js"></script>
        <script src="/js/jquery.bootgrid.min.js"></script>
        @yield('scripts')
    </body>
</html>
