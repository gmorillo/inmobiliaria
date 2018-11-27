import {template} from '../../app.js'

template.component('propertyDetail', {
    bindings: {priceBunddle:'<'},
    templateUrl: 'property-detail.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertydetail',
    controller:
    ['properties',
       
        function propertyDetail() {
            
            let $propertydetail = this
            $propertydetail.details = [];
            this.$onChanges = function(changesObj) {
                if(angular.isDefined(changesObj.priceBunddle) && angular.isDefined(changesObj.priceBunddle.currentValue)){
                    $propertydetail.detalles = changesObj.priceBunddle.currentValue.detail;
                }
                
            }
        }
    ]
});