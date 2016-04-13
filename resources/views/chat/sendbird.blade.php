@extends('layouts.main')
@section('content')
<div class="jumbotron">
    <div class="row">
        <h1>
            SendBird
        </h1>
        <p class="lead">
            Description: A SendBird chat application for Gradberry/TryTara.
        </p>
    </div>
    
    <hr>

    <div class="row">
        <input type="text" class="index-nickname" maxlength="12" placeholder="Nickname for chat 1" id="user_nickname1">
        <button type="button" class="index-button" id="btn_start1">Initialize</button>
    </div>

    <div class="row">
        <input type="text" class="index-nickname" maxlength="12" placeholder="Nickname for chat 2" id="user_nickname2">
        <button type="button" class="index-button" id="btn_start2">Initialize</button>
    </div>
</div>

    <div class="row" id="chatRow">
        <!-- Chat 1 -->
        <div class="col-md-5">
            <div id="chat1" class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat 1
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="#"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-time"></span>
                                Away</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span>
                                Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat 1 -->

        <!-- Chat 2 -->
        <div class="col-md-offset-2 col-md-5">
            <div id="chat2" class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Chat 2
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </button>
                        <ul class="dropdown-menu slidedown">
                            <li><a href="#"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-time"></span>
                                Away</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><span class="glyphicon glyphicon-off"></span>
                                Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <ul class="chat">
                        
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat 2 -->
    </div>
@stop