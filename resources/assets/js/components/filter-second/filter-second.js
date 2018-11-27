import {template} from '../../app.js'

template.factory('Products', function () {
	let products = [
		{ name: 'Heathered flannel buffalo plaid shirt',
		color: 'red', size: 'small', price:49.95 },
		{ name: 'Flannel plaid shirt',
		color: 'yellow', size: 'medium', price:49.95 },
		{ name: 'Heathered oxford shirt (slim fit)',
		color: 'blue', size: 'large', price:49.95 },
		{ name: 'Classic plaid oxford',
		color: 'green', size: 'small', price:49.95 },
		{ name: 'Lived-in chambray shirt',
		color: 'purple', size: 'medium', price:39.95 },
		{ name: 'Lived-in herringbone shirt',
		color: 'pink', size: 'large', price:54.95 },
		{ name: 'standard fit jeans',
		color: 'red', size: 'large', price:59.95 },
		{ name: 'black fill slim fit',
		color: 'yellow', size: 'small', price:59.95 },
		{ name: 'heavyweight hoodie',
		color: 'blue', size: 'medium', price:49.95 },
		{ name: 'Lived-in flat front shorts',
		color: 'green', size: 'large', price:44.95 },
		{ name: 'Holiday plaid oxford shirt',
		color: 'purple', size: 'small', price:49.95 },
		{ name: 'Lived-in flat front shorts',
		color: 'pink', size: 'medium', price:44.95 },
		{ name: 'Solid pique polo',
		color: 'red', size: 'medium', price:29.95 },
		{ name: 'Contrast pique polo',
		color: 'yellow', size: 'large', price:29.95 },
		{ name: 'The new polo',
		color: 'blue', size: 'small', price:29.95 },
		{ name: 'Lived-in solid polo',
		color: 'green', size: 'medium', price:29.95 },
		{ name: 'Soft pullover hoodie',
		color: 'purple', size: 'large', price:44.95 },
		{ name: 'Lived-in zip hoodie',
		color: 'pink', size: 'small', price:44.95 }
	];
	return products;
});

template.component('filterSecond', {
    templateUrl: 'filter-second.html',
    controllerAs: '$filtersecond',
    controller:
    ['properties', 'toastr', 'Products', '$scope',
       
        function filterSecondctrl(properties, toastr, Products, $scope) {
            
            $scope.data = Products;
            //console.log(Products);
			$scope.filter = {};
			$scope.categories = ['color','size'];

			$scope.addProps = function(obj, array) {
			if (typeof array === 'undefined') {
			  return false;
			}
			return array.reduce(function (prev, item) {
			  if (typeof item[obj] === 'undefined') {
			    return prev;
			  }
			  return prev + parseFloat(item[obj]);
			}, 0);
			}

			$scope.getItems = function (obj, array) {
			return (array || []).map(function (w) {
			  return w[obj];
			}).filter(function (w, idx, arr) {
			  if (typeof w === 'undefined') {
			    return false;
			  }
			  return arr.indexOf(w) === idx;
			});
			};
			// matching with AND operator
			$scope.filterByPropertiesMatchingAND = function (data) {
			var matchesAND = true;
			for (var obj in $scope.filter) {
			  if( $scope.filter.hasOwnProperty(obj) ) {
			    if (noSubFilter($scope.filter[obj])) continue;
			    if (!$scope.filter[obj][data[obj]]) {
			      matchesAND = false;
			      break;
			    }
			  }
			}
			return matchesAND;
			};
			// matching with OR operator
			$scope.filterByPropertiesMatchingOR = function (data) {
			var matchesOR = true;
			for (var obj in $scope.filter) {
			  if( $scope.filter.hasOwnProperty(obj) ) {
			    if (noSubFilter($scope.filter[obj])) continue;
			    if (!$scope.filter[obj][data[obj]]) {
			      matchesOR = false;
			    } else {
			      matchesOR = true;
			      break;
			    }
			  }
			}
			return matchesOR;
			};

			function noSubFilter(obj) {
			for (var key in obj) {
			  if (obj[key]) return false;
			}
			return true;
			}
	    }
    ]
});






