(function(){
    var app = angular.module('Recom', [
        'ui.bootstrap',
        'ngSanitize',
        'ngResource',
        'satellizer',
        'ngAnimate',
        'ui.select',
        'ui.bootstrap'
    ]);

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

    app.controller('RecomendacionesEditController', function($scope, recomendacionesFactory, $uibModalInstance, id, $http){


        $scope.init = function(){
            recomendacionesFactory.get({id:id}, function (response){
                $scope.recom = response;
                $scope.country = response.country_id;
                $scope.title = $scope.recom.name;
            });
        };

        $scope.searchCountry = function($select){
            return $http.get('/api/paises/listado/' + $select.search).then(function(response){
                $scope.countrys = response.data;
            });
        };

        $scope.sourceCountryChanged = function(){
            $scope.country  = $scope.recom.countries.id;
        };

        $scope.cancel = function () {
            $uibModalInstance.dismiss();
        };

        $scope.init();


    });

    app.controller('RecomendacionesController', function($scope, recomendacionesFactory, $uibModal) {
        recomendacionesFactory.get().$promise
            .then(function success(response){
                $scope.recom = response.data;
            });

        $scope.editRecomendacion = function(id){
            var modalInstance = $uibModal.open({
                animation: true,
                templateUrl: '/admin/recomendaciones/' + id +'/edit',
                controller: 'RecomendacionesEditController',
                backdrop: 'static',
                resolve: {
                    id: id
                }

            })
        }
    });

}());
//# sourceMappingURL=recomendaciones.js.map
