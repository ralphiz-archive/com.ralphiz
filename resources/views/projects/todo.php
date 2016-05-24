<!DOCTYPE html>
<html>
    <head>
        <title>
            ralphiz.com - Todo
        </title>
        <link href="/css/app.css" rel="stylesheet" type="text/css"/>
        <link href="/css/todo-list.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"></link>
    </head>
    <body ng-app="todoListApp">
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

        

        <h1>My TODO List</h1>
        <div class="container">

            <div ng-controller="mainCtrl" class="list">

                <div ng-class="{'editing-item': editing, 'edited': todo.edited}" ng-repeat="todo in todos" class="item">
                    <input ng-model="todo.completed" type="checkbox"/>
                    <label ng-hide="editing">{{ todo.name }}</label>
                    <input ng-change="todo.edited = true" ng-blur="editing = false;" ng-show="editing" ng-model="todo.name" class="editing-label" type="text"/>
                
                    <div class="actions">
                        <a href="" ng-click="editing = !editing">Edit</a>
                        <a href="" ng-click="helloWorld()">Save</a>
                        <a href="" class="delete">Delete</a>
                    </div>
                </div>

            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="/js/todo.js" type="text/javascript"></script>
    </body>
</html>