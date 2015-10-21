/**
 * Created by danghongyang on 13-12-26.
 */

function Index($scope, $http) {
	var json = "data/type.json";
    $http.get('php/index.php?type=list&t=' + (new Date()).getTime()).success(function (data) {
        $scope.list = data;
    });
    $scope.save_me = function (callback) {
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/save.php",
                //"content=" + encodeURIComponent(angular.toJson($scope.list, true)) + "&href=type"
                $('#typeform').serialize()
                ).success(function (data) {
            callback();
        }).error(function (data, status, headers, config) {
            alert("add failed");
            console.log(arguments);
        });
    };
    var remove_href = function (href) {
        $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
        $http.post("php/index.php?type", "href=" + href
                ).success(function (data) {
        }).error(function (data, status, headers, config) {
            alert("add failed");
            console.log(arguments);
        });
    };
    $scope.remove = function (target) {
        if (!confirm("确认删除")) {
            return;
        }
        var href = target.href;
        angular.forEach($scope.list, function (item, i) {
            if (target == item) {
                $scope.list.splice(i, 1);
            }
        });
        $scope.remove_id(target._id);
        //$scope.save_me(function () {
        //remove_href(href);
        //});
    };

    $scope.remove_id = function (id) {
        $.post('php/index.php?type=delete', {
            name: 'doctypes',
            id: id
        }, function (data) {

        });
    };
}