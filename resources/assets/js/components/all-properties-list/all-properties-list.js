import {template} from '../../app.js'

template.component('allPropertiesList', {
    bindings:{alldata:"<"},
    templateUrl: 'all-properties-list.html',
    controllerAs: '$allpropertieslist',
    controller:
    ['properties',
       
        function allPropertiesListctrl(properties) {
            
            let $allpropertieslist = this
            $allpropertieslist.allpropertieslist = [];
            this.$onChanges = function(changesObj) {
                if(angular.isDefined(changesObj.alldata) && angular.isDefined(changesObj.alldata.currentValue)){
                    $allpropertieslist.allpropertieslist = $allpropertieslist.alldata;
                }
            };
        }
    ]
});
