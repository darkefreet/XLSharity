var app = angular.module('sharity',[]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});

app.controller('yayasanController', function($scope,$http,$window){
    
  $scope.yayasan=[];
  // membuat object init dengan fungsi console.log routeParams
   $scope.init=function(){
    $http.get("/api/v1/yayasan")
    .then(function(response) {
        $scope.yayasan = response.data.data;
        console.log($scope.yayasan);
    });
   }

   $scope.goTo=function(id){
      var newPath = '/yayasan/'+id;
      $window.location.href=newPath;
   }
});

app.controller('yayasanDetailController', function($scope,$http,$location){
    console.log($location.absUrl());
  $scope.yayasan='';
  // membuat object init dengan fungsi console.log routeParams
   $scope.init=function(x){
    var id = x.substring(8);
    var url =  "/api/v1/yayasan/"+id;
    $http.get(url)
    .then(function(response) {
        $scope.yayasan = response.data.data;
        console.log($scope.yayasan);
    });
   
   }
});