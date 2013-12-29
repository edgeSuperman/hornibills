/**
 * Created by danghongyang on 13-12-27.
 */

function Api($scope, $http, $routeParams) {


    var href = $routeParams.href;

    $scope.href= href;

    var json = "data/" + href +".json";
    $http.get(json + "?t=" + (new Date()).getTime()).success(function(data){
        $scope.list = data;
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
    $scope.save = function(){
        if($scope.isNew) {
            $scope.list.unshift($scope.current);
        }
        else {
            angular.extend($scope.edit_api, $scope.current);
        }
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



}