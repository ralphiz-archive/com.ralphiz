<!DOCTYPE html>
<html>
    <head>
        <title>
            ralphiz.com - Minesweeper
        </title>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"></link>
    </head>
    <body ng-app="minesweeperApp">
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
                    <a class="navbar-brand" href="/">
                        ralphiz.com
                    </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/about">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="/projects">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right social">    
                        <li>
                            <a target="_blank" href="https://facebook.com/ralphcarletcacho"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/ralphiz"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/ralphcacho"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/ralphiz"><i class="fa fa-github-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://plus.google.com/+RalphCacho/about"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </nav>

        
        <div class="container">

            <div class="jumbotron">
                <div class="row">
                    <h1>
                        Minesweeper
                    </h1>
                    <p class="lead">
                        Description: A small side project of the game Minesweeper. Used <a href="http://www.simplygoodcode.com/2014/04/angularjs-game-programming-making-minesweeper/" target="_blank">this tutorial</a> to get started on learning how to create it using Angular. For now it will be a basic 9x9 game but for future iterations, you will be able to choose the size of the grid and difficulty.
                    </p>
                </div>
                <!-- 
                <div class="row">
                    <button class="btn btn-info" id="newMinesweeper" type="button">
                        New Game
                    </button>
                </div>
                 -->
            </div>

            
            <minesweeper></minesweeper>


        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="/js/minesweeper/minesweeper.js" type="text/javascript"></script>
        <script src="/js/minesweeper/controllers/main.js" type="text/javascript"></script>
        <script src="/js/minesweeper/directives/minesweeper.js" type="text/javascript"></script>
    </body>
</html>