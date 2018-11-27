import {template} from '../../app.js'

template.component('latestProperties', {
    templateUrl: 'latest-properties.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$latestproperties',
    controller:
    ['properties',
       
        function latestproperties(properties) {
            
            let $latestproperties = this
            this.$onInit = function() {
                properties.latest().then(( response ) => { $latestproperties.latestproperties = response.data });                
            }
        }
    ]
});



