import {template} from '../../app.js'

template.component('randomProperties', {
    templateUrl: 'random-properties.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$randomproperties',
    controller:
    ['properties',
       
        function randomProperties(properties) {
            
            let $randomproperties = this
            this.$onInit = function() {
                properties.randomProperties().then(( response ) => { $randomproperties.randomproperties = response.data });
                
            }
        }
    ]
});



