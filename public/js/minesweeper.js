angular.module('minesweeperApp', [])
.controller('minesweeperMain', function($scope) {

    $scope.minefield = createMinefield();
    
    $scope.createMinefield() = function() {
        var minefield = {};
        minefield.rows = [];
        for (var i = 0; i < 9; i++) {
            var row = {};
            row.spots = [];
            for (var j = 0; j < 9; j++) {
                var spot = {};
                spot.isCovered = true;
                row.spots.push(spot);
            }
            minefield.rows.push(row);
        }
        return minefield;
    }
    
});
