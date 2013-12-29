/**
 * Created by danghongyang on 13-12-26.
 */

function Index($scope, $http){
    var json = "data/type.json";
    $http.get(json + "?t=" + (new Date()).getTime()).success(function(data){
        $scope.list = data;
    });


    $scope.save_me = function (callback) {
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/save.php",
                "content=" + encodeURIComponent(angular.toJson($scope.list, true)) + "&href=type"
            ).success(function (data) {
                callback();
            }).error(function (data, status, headers, config) {
                alert("add failed");
                console.log(arguments);
            });
    };
    var remove_href  = function(href){
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/delete.php","href=" + href
            ).success(function (data) {
            }).error(function (data, status, headers, config) {
                alert("add failed");
                console.log(arguments);
            });
    };
    $scope.remove = function(target) {
        if(!confirm("确认删除")) {
            return;
        }
        var href = target.href;
        angular.forEach($scope.list, function(item, i){
            if(target == item) {
                $scope.list.splice(i, 1);
            }
        });
        $scope.save_me(function(){
            remove_href(href);
        });
    };
}