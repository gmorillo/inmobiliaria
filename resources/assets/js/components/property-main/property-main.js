import {template} from '../../app.js'

template.component('propertyMain', {
    template: `
	<property-price price-bunddle="$propertymain.data"></property-price>
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-sm-12 col-xs-12">
            <property-principal-img price-bunddle="$propertymain.data"></property-principal-img>
            <property-description price-bunddle="$propertymain.data"></property-description>
            <property-detail price-bunddle="$propertymain.data"></property-detail>
        </div>
        
        <div class="col-xl-4 col-lg-4 col-sm-12 col-xs-12">
            <property-detail-divisions></property-detail-divisions>
            <property-detail-form price-bunddle="$propertymain.data"></property-detail-form>
        </div>
    </div>
    `,
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$propertymain',
    controller:
    ['properties',
       
        function propertyMain(properties) {
            
            let $propertymain = this
            this.$onInit = function() {
                properties.getDataDetail(properties.getUrl()).then( ( response ) => { $propertymain.data = response.data } );                
            }

            /* this.getAllProperties = function(){
                properties.getAllProperties(properties).then(( response ) => { $propertymain.allproperties = response.data });
             }*/
        }
    ]
});