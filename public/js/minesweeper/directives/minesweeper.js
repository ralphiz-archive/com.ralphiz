angular.module('minesweeperApp')
.directive('minesweeper', function() {
    return {
        templateUrl: '/js/minesweeper/templates/minesweeper.html',
        controller: 'minesweeperMain',
        replace: true
    }
});