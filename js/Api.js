/**
 * Created by danghongyang on 13-12-27.
 */

function Api($scope, $http, $routeParams,$location, $anchorScroll,$timeout) {

    var href = $routeParams.href;

    $scope.href= href;

    var json = "data/" + href +".json";
    $http.get(json + "?t=" + (new Date()).getTime()).success(function(data){
        $scope.list = data;
        $timeout(function(){
            var id = $routeParams.name;
            $scope.scrollTo(id);
        });
    }).error(function(){
            $scope.list = [];
        });

    var empty = {
        "name":"接口名",
        "url": "接口url",
        "method": "",
        "description": "接口描述",
        "params": [
            {
                "Name": "param_1_name",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "Description of the first parameter."
            },
            {
                "Name": "userId",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "The userId parameter that is in the URI."
            }
        ],
        "response":[
            {
                "Name": "param_1_name",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "Description of the first parameter."
            },
            {
                "Name": "userId",
                "Required": "Y",
                "Default": "",
                "Type": "string",
                "Description": "The userId parameter that is in the URI."
            }
        ],
        "demo": "<?php \n\r var_dump(123);"
    };

    $scope.TYPES = [
       "string", "int"
    ];
    $scope.add = function(){
        $scope.current = angular.copy(empty);
        $scope.isNew = true;
    };
    $scope.save_me = function(){
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/save.php",
                "content=" + encodeURIComponent(angular.toJson($scope.list, true)) + "&href=" + href
            ).success(function (data) {
                $scope.isNew = false;
                $scope.current = null;
                $scope.edit_api = null;
            }).error(function (data, status, headers, config) {
                alert("add failed");
                console.log(arguments);
            });
    };
    $scope.save = function(){
        if($scope.isNew) {
            $scope.list.unshift($scope.current);
        }
        else {
            angular.extend($scope.edit_api, $scope.current);
        }
        $scope.save_me();
    };
    $scope.edit = function(api) {
        var copy = angular.copy(api);
        $scope.current = copy;
        $scope.edit_api = api;
    };
    $scope.cancel = function(){
        $scope.isNew = false;
        $scope.current = null;
        $scope.edit_api = null;
    };

    $scope.editorOptions = {
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift",
        onLoad: function(){
            console.log(123);
        }
    };

    $scope.scrollTo = function(id){
        var old = $location.hash();
        $location.hash(id);
        $anchorScroll();
        //reset to old to keep any additional routing logic from kicking in
        $location.hash(old);
    };

    $scope.remove = function(collection, item){
        if(confirm("确认删除?")) {
            for(var i = 0; i < collection.length; i++) {
                if(collection[i] == item) {
                    collection.splice(i, 1);
                }
            }
        }
    };
    $scope.add_param = function(current){
        var copy = angular.copy(empty.params[0]);
        current.params.push(copy);
    };
    $scope.add_response = function(current){
        var copy = angular.copy(empty.response[0]);
        current.response.push(copy);
    };


}