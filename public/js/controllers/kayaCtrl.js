/**
 * Created by kelvin on 1/13/15.
 */
angular.module("malariaApp")
    .controller("kayaCtrl",function($scope,$http){
       $scope.currentKaya = {};
       $scope.random = parseInt(Math.random()*1000000);
        $scope.matchName = function(query) {
            return function(friend) { return friend.region_id == query; }
        };

    })