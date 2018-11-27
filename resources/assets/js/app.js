export const template = angular.module('template',
    [
        'ngSanitize',
        'smart-table',
        'angular-loading-bar',
        'ngAnimate',
        'ui.bootstrap',
        'isteven-multi-select',
        'toastr',
        'ngFileSaver',
        'ngFileUpload'
    ]
);
window.template = template
template.config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{%');
    $interpolateProvider.endSymbol('%}');
}]);
template.config(['cfpLoadingBarProvider', function (cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeBar = true;
    cfpLoadingBarProvider.latencyThreshold = 100;
    cfpLoadingBarProvider.includeSpinner = false;
}]);
template.config(['toastrConfig', function (toastrConfig) {
    angular.extend(toastrConfig, {
        allowHtml: false,
        closeButton: true,
        progressBar: true
    });
}]);

template.config(['$compileProvider', function ($compileProvider) {
    const production = process.env.NODE_ENV === 'production' ? false : true
    $compileProvider.debugInfoEnabled(production);
}]);

template.config(['$httpProvider', function ($httpProvider) {
    // $httpProvider.defaults.xsrfCookieName = 'XSRF-TOKEN_NSC_DOCS';
    $httpProvider.defaults.xsrfCookieName = $('meta[name="app-cookie-name"]').attr('content');
    $httpProvider.defaults.xsrfHeaderName = 'X-XSRF-TOKEN';
    $httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
    $httpProvider.interceptors.push(['$q', function ($q) {
        return {
            'responseError': function (response) {
                if (response.status === 401) {
                    window.location.href = '/';
                }
                return $q.reject(response);
            }
        }
    }]);
}]);

