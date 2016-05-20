<div ng-controller="MinesweeperController">
    <table border="1">
        <tr ng-repeat="row in minefield.rows">
            <td ng-repeat="spot in row.spots">
                {{spot.isCovered}}
            </td>
        </tr>
    </table>
</div>