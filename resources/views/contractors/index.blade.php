<?php
use Faker\Factory as Faker;

$faker = Faker::create();
?>

@extends('layouts.trytara')

@section('content')
{{ $faker->name }}
@stop