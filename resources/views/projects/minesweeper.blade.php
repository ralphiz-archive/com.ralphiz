@extends('layouts.main')
@section('content')
<div class="jumbotron">
    <div class="row">
        <h1>
            Minesweeper
        </h1>
        <p class="lead">
            Description: A small side project of the game Minesweeper.
        </p>
    </div>

    <div class="row">
        <button type="button" class="btn btn-info" id="newMinesweeper">New Game</button>
    </div>
</div>

<div id="mineSweeperDiv">
    <canvas id="mineSweeperCanvas" width="400" height="400"></canvas>
</div>

@stop
@section('scripts')
<script src="/js/minesweeper.js"></script>
@stop