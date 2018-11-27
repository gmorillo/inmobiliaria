import {template} from '../../app.js'

template.component('searchFilterHome', {
    templateUrl: 'search-filter-home.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$searchfilterhome',
    controller:
    [
       
        function searchfilterhome() {
            
            let $searchfilterhome = this
            this.$onInit = function() {

            }
        }
    ]
});
