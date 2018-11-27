import {template} from '../../app.js'

template.component('propertyDetailDivisions', {
    templateUrl: 'property-detail-divisions.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertydetaildivisions',
    controller:
    [
       
        function propertyDetailDivisions() {
            
            let $propertydetaildivisions = this
            this.$onInit = function() {

            }
        }
    ]
});