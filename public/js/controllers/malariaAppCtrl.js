/**
 * Created by kelvin on 1/13/15.
 */
angular.module("malariaApp")
    .controller("malariaAppCtrl",function($scope,$http,$location){
        $scope.data ={};
        //getting all kayas
        /**
         * TODO : Refine this statement to fetch by chunks
         */
        $http.get("index.php/kaya").success(function(res){
            $scope.data.kaya = res;
        });

        //getting all regions
        $http.get("index.php/regions").success(function(data){
            $scope.data.regions = data;
        });

        //getting all districts
        $http.get("index.php/districts").success(function(data){
            $scope.data.districts = data;
        });

        //setting active link on top menu
        $scope.isActive = function (viewLocation) {
            var active = (viewLocation === $location.path());
            return active;
        };

        $scope.addTwo = function(one,two){
            return parseInt(one) + parseInt(two);
        }


    })