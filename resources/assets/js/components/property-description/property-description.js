import {template} from '../../app.js'

template.component('propertyDescription', {
    bindings: {priceBunddle:'<'},
    templateUrl: 'property-description.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertydescription',
    controller:
    ['properties',
       
        function propertyDescription(properties) {
            
            let $propertydescription = this
            this.$onInit = function() {
                //  properties.getDetails(properties.getUrl()).then( ( response ) => { $propertydescription.data = response.data } );
            }
        }
    ]
});