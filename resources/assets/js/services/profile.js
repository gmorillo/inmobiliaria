import {template} from '../app.js';

template.service('profile', ['$http', function ($http) {
	this.getUserProfile = () => $http.get(`/profile/get-user-profile`);
    this.profileHeader = () => $http.get(`/profile/profile-header`);
    this.profileLeftMenu = () => $http.get(`/profile/profile-left-menu`);
    this.getAllProperties = () => $http.get(`/profile/get-all-properties`);
    this.updateAccountForm = (form) => $http.post(`/profile/update-account`, form);
    this.getAllselects = () => $http.get(`/profile/all-selects`);
    this.sendNewPropertyForm = (form) => $http.post(`/profile/new-property-form`, form);
    this.uploadLogo = (data) => $http.post(`/profile/uploadLogo`, data);
    this.pleaseInactivateProperty = ($id) => $http.post(`/profile/inactivate-property`, {propertyId:$id});
    this.pleaseActivateProperty = ($id) => $http.post(`/profile/activate-property`, {propertyId:$id});
    this.deleteProperty = ($id) => $http.post(`/profile/delete-property`, {propertyId:$id});
    this.editProperty = ($id) => $http.post(`/profile/edit-property`, {propertyId:$id});
    this.updateProperty = (data) => $http.post(`/profile/update-property`,  data);
    this.editPropertyDetails = (data) => $http.post(`/profile/edit-detail`,  data);
    this.deleteImage = ($id) => $http.post(`/profile/delete-images`, {imgId:$id});
    this.addImages = (data) => $http.post(`/profile/add-images`, data);
}]);