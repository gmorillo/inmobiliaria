import {template} from '../../app.js'

template.controller('editProperty', {
    bindings:{alldata:"<"},
    templateUrl: 'edit-property-form.html',
    controllerAs: '$ctrl',
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