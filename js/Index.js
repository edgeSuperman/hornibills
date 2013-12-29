/**
 * Created by danghongyang on 13-12-26.
 */

function Index($scope, $http){
    var json = "data/type.json";
    $http.get(json + "?t=" + (new Date()).getTime()).success(function(data){
        $scope.list = data;
    });
}