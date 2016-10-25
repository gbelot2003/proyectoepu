(function(){
    var app = angular.module('Recom', ['ngResource']);

    app.factory('recomendacionesFactory', function($resource){
        return $resource('/api/recomendaciones/:id', { id: '@id', page:'@page'}, {
            'update':{method:'PUT'},
            'query': {method:'GET',
                params:{
                    query:"@query",
                    page:"@page"},
                url:'api/recomendaciones/:query'
            }
        })
    });

    app.controller('RecomendacionesController', function($scope, recomendacionesFactory) {
        recomendacionesFactory.get().$promise
            .then(function success(response){
                $scope.recom = response.data;
            });
    });

}());
//# sourceMappingURL=recomendaciones.js.map
