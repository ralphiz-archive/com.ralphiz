@extends('layouts.trytara')

@section('content')

    <div class="t-header">
        <div class="th-title">
            Demo
        </div>
    </div>

    <table id="contractors-table" class="table table-striped table-condensed table-responsive">
        <thead>
            <tr>
                <th data-column-id="name" data-formatter="name" data-sortable="true">Name</th>
                <th data-column-id="email" data-sortable="true">E-mail</th>
                <th data-column-id="location" data-sortable="true">Location</th>
                <th data-column-id="recent" data-sortable="true">Recent Experience</th>
                <th data-column-id="skill1" data-sortable="true">Skill 1</th>
                <th data-column-id="score1" data-sortable="true">Score 1</th>
                <th data-column-id="skill2" data-sortable="true">Skill 2</th>
                <th data-column-id="score2" data-sortable="true">Score 2</th>
                <th data-column-id="skill3" data-sortable="true">Skill 3</th>
                <th data-column-id="score3" data-sortable="true">Score 3</th>
                <th data-column-id="average" data-sortable="true">Avg</th>
                <th data-column-id="looking" data-sortable="true">Looking</th>
                <th data-column-id="actions" data-formatter="actions" data-sortable="false">Commands</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contractors as $contractor)
            <tr>
                <td>{{ $contractor->user->firstname }},{{ $contractor->user->lastname[0] }},{{ $contractor->photo }}</td>
                <td>{{ $contractor->user->email }}</td>
                <td>{{ $contractor->city.', '.$contractor->state }}</td>
                <td>{{ $contractor->title }}</td>
                <td>{{ $contractor->skill1 }}
                <td>{{ $contractor->score1 }}
                <td>{{ $contractor->skill2 }}
                <td>{{ $contractor->score2 }}
                <td>{{ $contractor->skill3 }}
                <td>{{ $contractor->score3 }}
                <td>{{ $contractor->general_score }}</td>
                <td>@if ($contractor->looking) {{ "Yes" }} @else {{ "No" }} @endif</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('scripts')
<script src="/js/search-contractors.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var grid = $("#contractors-table").bootgrid({
            caseSensitive: false,
            rowCount: [20, 50, 100, -1],
            multiSort: true,
            formatters: {
                "name": function(column, row) {
                    return nameFormatterFunction(column, row);
                }
            }

        });
    });
</script>
@stop