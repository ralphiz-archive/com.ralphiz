<!DOCTYPE html>
<html>
    <head>
        <title>
            ralphiz.com
        </title>
        <link rel="stylesheet" type="text/css" href="/css/app.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        @yield('styles')
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
                    <a class="navbar-brand" href="{{ route('home') }}">
                        ralphiz.com
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
                            <a href="{{ route('projects') }}">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href={{ route('contact' ) }}>
                                Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right social">    
                        <li>
                            <a href="https://facebook.com/ralphcarletcacho"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ralphiz"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/ralphcacho"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://github.com/ralphiz"><i class="fa fa-github-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/+RalphCacho/about"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="/js/SendBird.min.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/chat.js"></script>
        <script src="/js/chat2.js"></script>
        @yield('scripts')
    </body>
</html>
