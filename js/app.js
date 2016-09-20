angular.module('rexApp',[])
.controller('rexController', ['$scope', function ($scope) {
  $scope.test = 'test';
  $scope.customers = [];

  $scope.departments = [];
  $scope.shifts = [];

  $scope.initialize = function(){
    $.ajax({
      method: "POST",
      url: './getcustomers'
    })
    .success(function( data ) {
        // console.log( $.parseJSON(data) );
        $scope.customers = $.parseJSON(data) ;
        $scope.$apply();
    });
  }

  $scope.initialize();

  $scope.updatesubdata = function(){
    // console.log($scope.job_add_cid);
    for (var i = 0; i < $scope.customers.length; i++) {
      var customer = $scope.customers[i];
      if (customer.cid == $scope.job_add_cid) {
        $scope.departments = [];
        $scope.shifts = [];
        // console.log(customer);
        $scope.departments = $.parseJSON(customer.departmentname);
        $scope.shifts = $.parseJSON(customer.shiftname);

        $scope.$apply();
      };
    };

  }
}]);

function clean_json_data (data) {
  return JSON.stringify("'"+data.slice(1,-2)+"'");
}