var app = angular.module('sharity',[]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});

//Controller
app.controller('sharityController', function($scope,$http){
    
  $scope.yayasan=[];
  $scope.kategori=[];
  // membuat object init dengan fungsi console.log routeParams
   $scope.init=function(){
    
    $http.get("/api/v1/yayasan")
    .then(function(response) {
        $scope.yayasan = response.data.data;
        console.log($scope.yayasan);
    });

    $http.get("/api/v1/kategori")
    .then(function(response) {
        $scope.kategori = response.data.data;
        console.log($scope.kategori);
    });
   
   }

   $scope.test="aksllkdsj";

});