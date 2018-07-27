app.controller('authCtrl', function($scope, $rootScope, $routeParams, $location, $http, Data) {
    $scope.login = {};
    $scope.signup = {};
    $scope.sa_login = function(customer) {
        Data.post('login', {
            customer: customer
        }).then(function(results) {
            Data.toast(results);
            if (results.status == "success") {
                $location.path('home');
            }
        });
    };
    $scope.signup = {
        user_email: '',
        user_password: '',
        user_name: '',
        user_phone: '',
        user_address: ''
    };
    $scope.signUp = function(customer) {
        Data.post('signUp', {
            customer: customer
        }).then(function(results) {
            Data.toast(results);
            if (results.status == "success") {
                $location.path('home');
            }
        });
    };
    $scope.logout = function() {
        Data.get('logout').then(function(results) {
            Data.toast(results);
            $location.path('login');
        });
    }
});