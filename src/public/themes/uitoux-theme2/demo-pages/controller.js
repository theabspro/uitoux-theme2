app.component('home', {
    templateUrl: uitoux_theme2_home_template_url,
    controller: function($http, $location, HelperService, $scope, $routeParams, $rootScope, $location) {
        $scope.theme = theme;
    }
});
