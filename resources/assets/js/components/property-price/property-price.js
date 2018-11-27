import {template} from '../../app.js'

template.component('propertyPrice', {
    bindings: {priceBunddle:'<'},
    templateUrl: 'property-price.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertyprice',
    controller:
    ['properties',
       
        function propertyPrice(properties) {
            
            let $propertyprice = this
            this.$onInit = function() {
                //properties.getDataDetail(properties.getUrl()).then( ( response ) => { $propertyprice.data = response.data } );
                //$propertyprice.data = $propertyprice.priceBunddle;
            }
        }
    ]
});