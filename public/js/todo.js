angular.module('todoListApp', [])
.controller('mainCtrl', function($scope) {
    $scope.helloWorld = function() {
        console.log("Hello there! This is the helloWorld controller function, in the mainCtrl!");
    };

    $scope.todos = [
        {"name": "clean the house"},
        {"name": "walk the dog"},
        {"name": "take out trash"},
        {"name": "learn angularjs"},
        {"name": "play hearthstone"}
    ]
});