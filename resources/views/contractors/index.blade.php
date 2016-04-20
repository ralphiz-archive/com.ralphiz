@extends('layouts.trytara')

@section('content')


    <table id="contractors-table" class="table table-striped table-condensed table-responsive">
        <thead>
            <tr>
                <th data-column-id="name" data-formatter="name" data-sortable="true">Name</th>
                <th data-column-id="email">E-mail</th>
                <th data-column-id="location">Location</th>
                <th data-column-id="recent">Recent Experience</th>
                <th data-column-id="skill1">Skill 1</th>
                <th data-column-id="score1">Score 1</th>
                <th data-column-id="skill2">Skill 2</th>
                <th data-column-id="score2">Score 2</th>
                <th data-column-id="skill3">Skill 3</th>
                <th data-column-id="score3">Score 3</th>
                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Commands</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contractors as $contractor)
            <tr>
                <td>{{ $contractor->user->firstname.' '.$contractor->user->lastname }}</td>
                <td>{{ $contractor->user->email }}</td>
                <td>{{ $contractor->city.', '.$contractor->state }}</td>
                <td>{{ $contractor->title }}</td>
                <td>{{ $contractor->skill1 }}
                <td>{{ $contractor->score1 }}
                <td>{{ $contractor->skill2 }}
                <td>{{ $contractor->score2 }}
                <td>{{ $contractor->skill3 }}
                <td>{{ $contractor->score3 }}
                <td>@if ($contractor->looking) {{ "Yes" }} @else {{ "No" }} @endif</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop