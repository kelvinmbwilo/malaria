/**
 * Created by kelvin on 1/19/15.
 */
angular.module("malariaApp")
    .controller('stationsCtrl',function($scope,$http){
        var  tree;
        $scope.getRegionChildren = function(id){
            var child = [];
            var regionId = id;
            angular.forEach($scope.data.districts,function(value){
               if(value.region_id == regionId){
                   var label = value.district;
                   var children = ['loading...'];
                   var id = value.id;
                   var level = 3;
                   child.push({label:label,children:children,id:id,level:level,onSelect: function(branch){
                       //getting all wards for this district
                       $scope.listItems  = $scope.listWards(branch.id);
                       var branch =branch;
                       $http.get("index.php/wards/district/"+branch.id).success(function(data){
                           branch.children = [];
                           angular.forEach(data,function(value){
                               var label = value.name;
                               var children = ['loading...'];
                               var id = value.id;
                               var level = 4;
                               branch.children.push({label:label,children:children,id:id,level:level,noLeaf: true,onSelect: function(branch){
                                   //getting all villages for this ward
                                   $scope.listItems  = $scope.listVillage(branch.id);
                                   var branch =branch;
                                   $http.get("index.php/village/ward/"+branch.id).success(function(data){
                                       branch.children = [];
                                       angular.forEach(data,function(value){
                                           var label = value.name;
                                           var children = [];
                                           var id = value.id;
                                           var level = 5;
                                           branch.children.push({label:label,children:children,id:id,level:level,noLeaf: false,onSelect: function(branch){
                                              $scope.listItems  = $scope.distributionList(branch.id);
                                           }
                                           });
                                       })
                                   });

                               }});
                           })
                       });

                   }});
               }

            });
            return child;
        }
        var child = [];
        angular.forEach($scope.data.regions,function(value){
            var label = value.region;
            var children = $scope.getRegionChildren(value.id);
            var id = value.id;
            var level = 2;
            child.push({label:label,children:children,id:id,level:level});
        });
        $scope.testObject = child;
        $scope.data.orgUnit = [{
            label: 'Tanzania',
            children: child,
            id: 3
        }];
        $scope.my_tree = tree = {};
        $scope.my_tree_handler = function(branch) {
            $scope.data.currentOrgUnit = branch.label;
            $scope.data.currentLevel = branch.level;
//            tree.collapse_all();
//            tree.expand_branch(branch);
            switch(branch.level){
                case 1:
                    $scope.listRegions(branch.id);
                    break;
                case 2:
                    $scope.listDistrict(branch.id);
                    break;

            }
        }

        $scope.currentListing = "";
        //list ya mikoa
        $scope.listRegions =function(){
            $scope.currentListing = "views/region_list.html";
            angular.forEach($scope.data.regions,function(value){
                var region = value;
                $http.get("index.php/regiondetails/"+value.id).success(function(data){
                    region.details = data;
                });
            });

        }
        //list ya wilaya
        $scope.listDistrict =function(id){
            $scope.currentListing = "views/district_list.html";
            $http.get("index.php/districtdetails/"+id).success(function(data){
                $scope.distictss =  data;
            });
        }
        //list ya kata
        $scope.listWards =function(id){
            $scope.currentListing = "views/ward_list.html";
            $http.get("index.php/warddetails/"+id).success(function(data){
                $scope.wardss =  data;
            });
        }
        //list ya vijiji
        $scope.listVillage =function(id){
            $scope.currentListing = "views/village_list.html";
            $http.get("index.php/villagedetails/"+id).success(function(data){
                $scope.villagess =  data;
            });
        }

        //list ya vijiji
        $scope.distributionList =function(id){
            $scope.currentListing = "views/villagedist.html";
            return "distribution List ya Villages "+id
        }

        //adding  new orgunit

        $scope.addOrgUnit = function(val) {
            $scope.data.addedOrgUnit = null;
            var b;
            b = tree.get_selected_branch();
            switch (b.level){
                case 1:
                    $http.post("index.php/region", {val:val}).success(function (newKaya) {
                        return tree.add_branch(b, {
                            label: newKaya.region,
                            level: b.level+1,
                            id :newKaya.id,
                            children:$scope.getRegionChildren(newKaya.id)
                        });
                    })
                    break;
                case 2:
                    $http.post("index.php/adddistrict/"+b.id, {val:val}).success(function (newKaya) {
                        return tree.add_branch(b, {
                            label: newKaya.district,
                            level: b.level+1,
                            id:newKaya.id,
                            children:[]
                        });
                    })
                    break;
                case 3:
                    $http.post("index.php/addward/"+b.id, {val:val}).success(function (newKaya) {
                        return tree.add_branch(b, {
                            label: newKaya.name,
                            level: b.level+1,
                            id:newKaya.id,
                            children:[]
                        });
                    })
                    break;
                case 4:
                    $http.post("index.php/addvillage/"+ b.id, {val:val}).success(function (newKaya) {
                        return tree.add_branch(b, {
                            label: newKaya.name,
                            level: b.level+1,
                            id:newKaya.id,
                            children:[]
                        });
                    })
                    break;
                default: alert("this is the smallest level")
            }

        };

    });