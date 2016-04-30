@extends('layouts.trytara')

@section('content')

    <div class="t-header">
        <div class="th-title">
            <div class="container">
                @include('contractors.partials._skill1filter')
            </div>
        </div>
    </div>

    <table id="contractors-table" class="table table-striped table-condensed table-responsive">
        <thead>
            <tr>
                <th data-column-id="name" data-formatter="name" data-sortable="true">Name</th>
                <th data-column-id="email" data-sortable="true">E-mail</th>
                <th data-column-id="location" data-sortable="true">Location</th>
                <th data-column-id="recent" data-sortable="true">Recent Experience</th>
                <th data-column-id="skill1" data-formatter="skill1" data-sortable="true">Skill 1</th>
                <th data-column-id="skill2" data-formatter="skill2" data-sortable="true">Skill 2</th>
                <th data-column-id="skill3" data-formatter="skill3" data-sortable="true">Skill 3</th>
                <th data-column-id="average" data-sortable="true">Avg</th>
                <th data-column-id="employment">Employment</th>
                <th data-column-id="looking" data-formatter="looking" data-sortable="true">Looking</th>
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
                <td>{{ $contractor->score1 }},{{ $contractor->skill1 }}</td>
                <td>{{ $contractor->score2 }},{{ $contractor->skill2 }}</td>
                <td>{{ $contractor->score3 }},{{ $contractor->skill3 }}</td>
                <td>{{ $contractor->general_score }}</td>
                <td>{{ "Part Time or Full Time?" }}</td>
                <td>{{ $contractor->looking }}</td>
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
                    return nameFormatter(column, row);
                },
                "skill1": function(column, row) {
                    return skill1Formatter(column, row);
                },
                "skill2": function(column, row) {
                    return skill2Formatter(column, row);
                },
                "skill3": function(column, row) {
                    return skill3Formatter(column, row);
                },
                "looking": function(column, row) {
                    return lookingFormatter(column, row);
                }
            }

        });
    });
</script>
@stop