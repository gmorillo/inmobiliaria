import {template} from '../../app.js'

template.component('propertyPrincipalImg', {
    bindings: {priceBunddle:'<'},
    templateUrl: 'property-principal-img.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertyprincipalimg',
    controller:
    ['properties',
       
        function propertyPrincipalImg() {
            
            let $propertyprincipalimg = this
            this.$onInit = function() {

            }
        }
    ]
});