var app = angular.module('xmlApp', [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

app.controller('xmlController', function($scope, $http) {
    
	$scope.posts = [];
	$scope.loading = false;
	
	
    $scope.init = function() {
    	$scope.loading = true;
    	$http.get('/xml.php').
    	success(function(data, status, headers, config) {
    		$scope.posts = data.tip;
    		$scope.loading = false;
    		console.log(data.tip);
    
    	});
    }
    
    $scope.init();
    
});

