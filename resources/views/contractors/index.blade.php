<?php
use Faker\Factory as Faker;

$faker = Faker::create();
?>

@extends('layouts.trytara')

@section('content')

    <table id="contractors-table" class="table table-striped table-condensed table-responsive">
        <thead>
            <tr>
                <th data-column-id="name" data-formatter="name" data-sortable="true">Name</th>
                <th data-column-id="email">E-mail</th>
                <th data-column-id="title">Title</th>
                <th data-column-id="location">Location</th>
                <th data-column-id="looking">Looking for Work?</th>
                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Commands</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contractors as $contractor)
            <tr>
                <td>{{ $contractor->user->firstname.' '.$contractor->user->lastname }}</td>
                <td>{{ $contractor->user->email }}</td>
                <td>{{ $contractor->title }}</td>
                <td>{{ $contractor->city.', '.$contractor->state }}</td>
                <td>@if ($contractor->looking) {{ "Yes" }} @else {{ "No" }} @endif</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@stop