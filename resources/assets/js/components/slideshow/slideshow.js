import {template} from '../../app.js'

template.component('slideShow', {
    templateUrl: 'slideshow.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$slideshow',
    controller:
    [
       
        function slideshow() {
            
            let $slideshow = this
            this.$onInit = function() {

            }
        }
    ]
});
