import {template} from '../../app.js'

template.component('allPropertiesListMain', {
    template: `
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-12 col-sm-12 col-xs-12">
                <filter-in-list filtro="$allpropertieslistmain.filtrado(filtro, type)"></filter-in-list>
                
            </div>
            <div class="col-xl-9 col-lg-12 col-sm-12 col-xs-12">
                <all-properties-list alldata="$allpropertieslistmain.allpropertieslistmaindisplay"></all-properties-list>
            </div>
        </div>
    </div>
    `,
    controllerAs: '$allpropertieslistmain',
    controller:
    ['properties',
       
        function allPropertiesListMainctrl(properties) {
            
            let $allpropertieslistmain = this
            this.filtroActivo = {
                negotiation: true,
                housingtype: true,
                characteristics:true
            };
            $allpropertieslistmain.allpropertieslistmain = [];
            this.$onInit = function() {
                    properties.allpropertieslist().then(( response ) => { $allpropertieslistmain.allpropertieslistmain = response.data;

                    //para poder hacer filtro
                    $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep($allpropertieslistmain.allpropertieslistmain);
                });
            }        
            this.filtrado = function(filtro, type){
                let collection = []; 

                if($allpropertieslistmain.allpropertieslistmain.length == $allpropertieslistmain.allpropertieslistmaindisplay.length){
                    collection = $allpropertieslistmain.allpropertieslistmain.filter(
                        function (arg){
                            const checkedFilter = filtro.filter((obj) => obj.id == arg[type] && obj.active);
                            console.log('entró en if de "this.filtrado"');
                            $allpropertieslistmain.filtroActivo[type] = true;
                            return checkedFilter.length > 0;                            
                        }
                    );
                    $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep(collection);
                    console.log('salió de if "this.filtrado, aún no entra en el "Else", cantidad de propiedades según filtro seleccionado: ' + $allpropertieslistmain.allpropertieslistmaindisplay.length)
                    //console.log($allpropertieslistmain.allpropertieslistmaindisplay);
                }else{   
                    switch(type){
                        case 'negotiation_id':
                            let k = 0;
                            _.each(filtro, function(o){
                                    if(o.active == true){k = k+1;}
                                }
                            );
                            if($allpropertieslistmain.filtroActivo.negotiation && k > 0 ){
                                collection = $allpropertieslistmain.allpropertieslistmaindisplay.filter(
                                    function (arg){
                                        const checkedFilter = filtro.filter((obj) => obj.id == arg[type] && obj.active);
                                        $allpropertieslistmain.filtroActivo[type] = true;
                                        console.log('Se ha seleccionado nuevo filtro de Negociación');
                                        return checkedFilter.length > 0;
                                    }
                                );
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep(collection);
                                console.log('El nuevo filtro de Negociación ha traido ' + $allpropertieslistmain.allpropertieslistmaindisplay.length + ' propiedades');
                                //console.log($allpropertieslistmain.allpropertieslistmaindisplay);
                            }else{

                                //$allpropertieslistmain.filtroActivo.negotiation = true;
                                $allpropertieslistmain.filtroActivo[type] = false;
                                // cuando no está activo ningun filtro mostramos todas las publicaciones
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep($allpropertieslistmain.allpropertieslistmain);
                                console.log('se ha quitado totalmente el filtro por tipo de Negociación, se muestran ' + $allpropertieslistmain.allpropertieslistmaindisplay.length + ' propiedades')
                                //console.log($allpropertieslistmain.allpropertieslistmaindisplay);
                            }
                            break;
                        case 'housingtype_id':
                            let ht = 0;
                            _.each(
                                filtro, 
                                function(o){
                                    if(o.active == true){ht = ht+1;}
                                    console.log('ht: ' + ht);
                                }
                            );
                            if($allpropertieslistmain.filtroActivo.housingtype && ht > 0 ){
                                collection = $allpropertieslistmain.allpropertieslistmain.filter(
                                    function (arg){
                                        const checkedFilter = filtro.filter((obj) => obj.id == arg[type] && obj.active);
                                        $allpropertieslistmain.filtroActivo[type] = true;
                                        console.log('Se ha seleccionado nuevo filtro de tipo de vivienda');
                                        return checkedFilter.length > 0;
                                    });
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep(collection);
                                console.log('El nuevo filtro de tipo de vivienda ha traido ' + $allpropertieslistmain.allpropertieslistmaindisplay.length + ' propiedades ');
                            }else{

                                $allpropertieslistmain.filtroActivo.housingtype = true;
                                // cuando no está activo ningun filtro mostramos todas las publicaciones
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep($allpropertieslistmain.allpropertieslistmain);
                                console.log('se ha quitado totalmente el filtro por tipo de vivienda, se muestran ' + $allpropertieslistmain.allpropertieslistmaindisplay.length + ' propiedades')
                                //console.log($allpropertieslistmain.allpropertieslistmaindisplay);
                            }
                        break;
                        case 'characteristics_id':
                            let charac = 0;
                            _.each(
                                filtro, 
                                function(o){
                                    if(o.active == true){charac = charac+1;}
                                }
                            );
                            if($allpropertieslistmain.filtroActivo.characteristics && charac > 0){
                                collection = $allpropertieslistmain.allpropertieslistmain.filter(
                                    function (arg){
                                        const checkedFilter = filtro.filter((obj) => obj.id == arg[type] && obj.active);
                                        $allpropertieslistmain.filtroActivo[type] = true;
                                        console.log('entro 2 characteristic');
                                        console.log(checkedFilter.length);
                                        return checkedFilter.length > 0;
                                    }
                                );
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep(collection);
                            }else{
                                $allpropertieslistmain.filtroActivo.characteristics = true;
                                // cuando no está activo ningun filtro mostramos todas las publicaciones
                                $allpropertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep($allpropertieslistmain.allpropertieslistmain);
                                console.log('salio 2 characteristic');
                                console.log($allpropertieslistmain.allpropertieslistmaindisplay);
                            }
                        break;
                        default: 
                            propertieslistmain.allpropertieslistmaindisplay =  _.cloneDeep($allpropertieslistmain.allpropertieslistmain);
                    }
                }               
            }
        }
    ]
});
