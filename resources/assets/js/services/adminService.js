import {template} from '../app.js';

template.service('adminService', ['$http', function ($http) {
    this.index = () => $http.get(`/admin`);
}]);
