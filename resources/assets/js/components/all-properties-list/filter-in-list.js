import {template} from '../../app.js'

template.component('filterInList', {
	bindings: {filtro: '&'},
    templateUrl: 'filter-in-list.html',
    controllerAs: '$filterinlist',
    controller:
    ['properties', 'toastr',
       
        function filterInListctrl(properties, toastr) {
            
            let $filterinlist = this
            $filterinlist.allpropertieslist = [];
            $filterinlist.negotiationSelection = [];
            this.propertytypeselected = {id:1};
            this.equipmentselected = {id:1};
            this.cityselected = {id:1};

            this.$onInit = function() {
                properties.filterInList(properties).then(( response ) => { $filterinlist.filterinlist = response.data });
                properties.getDataFilter(properties).then(( response ) => { $filterinlist.datafilter = response.data });
            }



            this.toggleSelection = function(item, collection){
            	_.forEach(collection, function(obj){
            		if(item.name === obj.name){
            			obj.active = !obj.active;
            		}
            	});
            	//toastr.success(item);

            	$filterinlist.filtro({
        			filtro: collection,
        			type: "negotiation_id"
        		});
            }

            this.housingTypeSelection = function(item, collection){
            	//console.log(collection);
            	_.forEach(collection, function(obj){
            		if(item.name === obj.name){
            			obj.active = !obj.active;
            		}
            	});
            	//toastr.success(item);

            	$filterinlist.filtro({
        			filtro: collection,
        			type: "housingtype_id"
        		});
            }

            this.characteristicsSelection = function(item, collection){
            	//console.log(collection);
            	_.forEach(collection, function(obj){
            		if(item.name === obj.name){
            			obj.active = !obj.active;
            		}
            	});
            	//toastr.success(item);

            	$filterinlist.filtro({
        			filtro: collection,
        			type: "characteristics_id"
        		});
            }

            this.filterCity = function(item, collection) {
                //alert('cambio la ciudad');
                
                properties.filterCity().then(( response ) => { $filterinlist.filterinlist = response.data;});



                
            }
        }
    ]
});