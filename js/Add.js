/**
 * Created by danghongyang on 13-12-26.
 */
function Add($scope, $http, $location){
    var json = "data/type.json";
    $http.get(json + "?t=" + (new Date()).getTime()).success(function(data){
        $scope.list = data;
        console.log($scope.list);
    });
    $scope.save = function(){
        $scope.list.push({
            "name": $scope.name,
            "href": $scope.name,
            "description": $scope.description
        });

        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/save.php",
                "content=" + encodeURIComponent(angular.toJson($scope.list, true)) + "&href=type"
            ).success(function (data) {
               $location.path("/");
            }).error(function (data, status, headers, config) {
                alert("add failed");
                console.log(arguments);
            });
    };
}