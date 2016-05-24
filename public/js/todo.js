angular.module('todoListApp', [])
.controller('mainCtrl', function($scope) {
    $scope.learningNgChange = function() {
        console.log("An input changed.");
    };

    $scope.todos = [
        {"name": "clean the house"},
        {"name": "walk the dog"},
        {"name": "take out trash"},
        {"name": "learn angularjs"},
        {"name": "play hearthstone"}
    ]
});