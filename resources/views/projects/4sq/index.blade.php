@extends('layouts.main')
@section('meta')
<meta name="4sqclient" content="2QQJG0VY4JDU5T3F1NEB0MJFK24TJNASWVLRLLVY5AGT1ZWX">
@stop
@section('content')
<div class="jumbotron">
    <div class="row">
        <h1>
            Foursquare App
        </h1>
        <p class="lead">
            Description: A small side project using Foursquare's API
        </p>
    </div>

    <div class="row">
        <article></article>
    </div>

</div>
@stop
@section('scripts')
<script src="/js/4sq/index.js"></script>
@stop