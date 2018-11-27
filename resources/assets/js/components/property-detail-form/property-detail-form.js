import {template} from '../../app.js'

template.component('propertyDetailForm', {
    bindings: {priceBunddle:'<'},
    templateUrl: 'property-detail-form.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertydetailform',
    controller:
    ['properties',
       
        function propertyDetailForm(properties) {

            let $propertydetailform = this;
            this.$onInit = function() {

            }

            this.sendForm = function($event,form){
                $event.stopPropagation();
                $event.preventDefault();
                $propertydetailform.email = $propertydetailform.priceBunddle;
                properties.sendContacForm(form).then( function(response)
                    {
                        if(response.status === 200){
                            alert('todo bien');
                        }
                    },function error(response){
                        alert('algo ha salido mal');
                    }
                );

            }

        }


    ]
});