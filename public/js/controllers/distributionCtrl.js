/**
 * Created by kelvin on 1/14/15.
 */
angular.module("malariaApp")
    .controller("distributionCtrl",function($scope,$http){
        $scope.districtVisible = [];

        angular.forEach($scope.data.regions,function(value,index){
            var region = value;
////            $http.get("index.php/districts/region/"+value.id).success(function(distr){
////                region.districts = distr;
////                angular.forEach(region.districts,function(val){
////                    var district = val;
////                    $http.get("index.php/people/district/"+val.id).success(function(ppl){
////                        district.people = ppl;
////                    });
////                });
////            });
            $http.get("index.php/people/region/"+value.id).success(function(ppl){
                region.people = ppl;
            });
        })
        $scope.showDistrictDetails = function(region){
            console.log("creating districts of "+ region.region);
            if(region.districts == null){
                $http.get("index.php/districts/region/"+region.id).success(function(distr){
                    region.districts = distr;
                    angular.forEach(region.districts,function(val){
                        var district = val;
                        $http.get("index.php/people/district/"+val.id).success(function(ppl){
                            district.people = ppl;
                        });
                    });
                });
            }
            $scope.districtVisible[region.id] = true;
        }

        $scope.hideDistrictDetails = function(region){
            console.log("hiding districts of "+ region.region);
            $scope.districtVisible[region.id] = false;
        }




    });