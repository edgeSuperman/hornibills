/**
 * Created by danghongyang on 13-12-26.
 */
function Add($scope, $http, $location, $routeParams) {
    var json = "data/type.json";
    var href = $routeParams.href;
    $scope.href = href;
    //$http.get(json + "?t=" + (new Date()).getTime()).success(function (data) {
    $http.get('php/index.php?type='+(href ? 'getType&id='+href : 'list')+'&t=' + (new Date()).getTime()).success(function (item) {
        //$scope.list = data || [];
        if (href) {
            /*angular.forEach($scope.list, function (item) {
                if (item.href == href) {
                    $scope.current = item;
                }
            });*/
            $scope.current = item;
        } else {
            $scope.current = {
                "name": "",
                "href": "",
                "description": ""
            };
        }
    }).error(function () {
        $scope.list = [];
    });
    var check_unique = function () {
        var r = true;
        //是新增的需要检查主键冲突哈哈哈我太蛋疼了
        if (!href) {
            angular.forEach($scope.list, function (item) {
                if ($scope.current.href == item.href) {
                    r = false;
                }
            });
        }
        return r;
    };
    $scope.save_me = function (id) {
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post('php/index.php?type='+(id ? 'editype&id='+id : 'addtype'),
                //"content=" + encodeURIComponent(angular.toJson($scope.list, true)) + "&href=type"
                $('#typeform').serialize()
                ).success(function (data) {
            $location.path("/");
        }).error(function (data, status, headers, config) {
            alert("add failed");
            console.log(arguments);
        });
    };
    $scope.save = function (id) {
        if ($scope.typeForm.$invalid) {
            return;
        }
        if (!href) {
            if (check_unique() == false) {
                alert("英文名和别的分类冲突了，换一个吧");
                return false;
            }
            ($scope.list || []).push({
                "name": $scope.current.name,
                "href": $scope.current.href,
                "description": $scope.current.description
            });
        }
        $scope.save_me(id);
    };
}