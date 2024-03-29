'use strict';
angular.module('todoListApp').controller('mainCtrl', function($scope, dataService) {
    $scope.addTodo = function() {
        var todo = {
            name: "This is a new todo."
        };
        $scope.todos.unshift(todo);
    };
    $scope.helloConsole = dataService.helloConsole;
    $scope.learningNgChange = function() {
        console.log("An input changed.");
    };
    dataService.getTodos(function(response) {
        console.log(response.data);
        $scope.todos = response.data;
    });
    $scope.deleteTodo = function(todo) {
        // Before deleting, get the index of the todo associated with the delete button that has been clicked. (https://teamtreehouse.com/community/ordering-mechanism-interferes-with-deletion-method)
        $scope.todos.splice($scope.todos.indexOf(todo), 1);
        dataService.deleteTodo(todo);
    };
    $scope.saveTodos = function(todo) {
        var filteredTodos = $scope.todos.filter(function(todo) {
            if(todo.edited) {
                return todo;
            };
        });

        dataService.saveTodos(filteredTodos);
    };
})