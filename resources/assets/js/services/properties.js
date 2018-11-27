import {template} from '../app.js';

template.service('properties', ['$http', function ($http) {

	this.getUrl = () => window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
    this.latest = () => $http.get(`/properties/latest`);
    this.randomProperties = () => $http.get(`/properties/random`);
    this.pricing = (id) => $http.get(`/properties/detail/` + id);
    this.getDataDetail = (id) => $http.get(`/properties/get/detail/` + id);
    this.sendContacForm = (form) => $http.post(`/properties/form`, form);
    this.allpropertieslist = () => $http.get(`/properties/all-properties`);
    //this.allpropertiesviews = () => $http.get(`/properties/all-properties-views`);
    this.filterInList = () => $http.get(`/properties/filter-in-list`);
    this.getDataFilter = () => $http.get(`/properties/data-filter`);
    this.filterCity = (id) => $http.get(`/properties/filter-city`);
}]);