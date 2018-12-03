import {template} from '../../app.js'

template.component('leftMenuAddPropertyLink', {
    bindings: {profileBunddle:'<', visible: '<'},
    templateUrl: 'left-menu-add-property.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$leftmenuaddpropertylink',
    controller:
    ['profile','toastr','Upload',
       
        function leftMenuAddPropertyLink(profile, toastr, Upload) {
            
            let $leftmenuaddpropertylink = this
            
            this.negotiationselected = {id:1};
            this.housingtypeselected = {id:1};
            this.propertytypeselected = {id:1};
            this.equipmentselected = {id:1};
            this.divisionsselected = {id:1};
            this.cityselected = {id:1};

            this.selected = false;

            this.details = [
                {name: 'Terraza'},
                {name: 'Acepta animales'},
                {name: 'Balcón'},
                {name: 'Piscina'},
                {name: 'Jardín'},
                {name: 'Trastero'},
                {name: 'Aire acondicionado'},
                {name: 'Plaza de garaje'},
                {name: 'Armarios empotrados'},
                {name: 'Calefacción central al gas'},
                {name: 'Con ascensor'},
            ];       


            this.$onChanges = function(changesObj) {
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue)){
                }

            };

            this.sendNewPropertyFormCtrl = function($event,form){
                $event.stopPropagation();
                $event.preventDefault();
                form.details = $leftmenuaddpropertylink.details;
                form.imagenes = $leftmenuaddpropertylink.img_reparacion;
                //console.log(form.imagenes)
                form.newdetails = $leftmenuaddpropertylink.newdetail;

                /*indice = document.getElementById("negotiationselected").value;
                console.log(indice);*/
                

                //$leftmenuaddpropertylink.email = $leftmenuaddpropertylink.priceBunddle;

                profile.sendNewPropertyForm(form).then( function(response)
                    {   
                        if(response.status === 200){
                            toastr.success('Propiedad dada de alta exitosamente');
                            //setTimeout(function () { window.location.reload(); }, 5000)
                        }
                        
                    },function error(response){
                        console.log('error');
                        if($leftmenuaddpropertylink.habs == null){
                            toastr.error('Debe indicar la cantidad de HABITACIONES de la propiedad');
                        }
                        if($leftmenuaddpropertylink.bath == null){
                            toastr.error('Debe indicar la cantidad de BAÑOS de la propiedad');
                        }
                        /*if(document.getElementById("negotiationselected").value == '1'){
                            toastr.error('Debe indicar el TIPO DE NEGOCIACIÓN');
                        }*/
                        /*if($leftmenuaddpropertylink.negotiationselected.id == '1'){
                            toastr.error('Debe indicar el TIPO DE NEGOCIACIÓN');
                        }
                        if($leftmenuaddpropertylink.housingtypeselected.id == '1'){
                            toastr.error('Debe indicar el TIPO DE VIVIENDA');
                        }
                        if($leftmenuaddpropertylink.propertytypeselected.id == '1'){
                            toastr.error('Debe indicar el TIPO DE INMUEBLE');
                        }
                        if($leftmenuaddpropertylink.equipmentselected.id == '1'){
                            toastr.error('Debe indicar el EQUIPAMIENTO de la propiedad');
                        }
                        if($leftmenuaddpropertylink.cityselected.id == '1'){
                            toastr.error('Debe indicar la CIUDAD donde está la propiedad');
                        }*/

                        if($leftmenuaddpropertylink.price == null){
                            toastr.error('Debe indicar el PRECIO de la propiedad');
                        }
                        if($leftmenuaddpropertylink.address == null || $leftmenuaddpropertylink.number == null || $leftmenuaddpropertylink.cp == null){
                            toastr.error('Debe indicar completar los campos de UBICACIÓN de la propiedad');
                        }
                        if($leftmenuaddpropertylink.area == null){
                            toastr.error('Debe indicar la SUPERFICIE de la propiedad');
                        }
                        if($leftmenuaddpropertylink.antiquity == null){
                            toastr.error('Debe indicar la ANTIGUEDAD de la propiedad');
                        }
                        if($leftmenuaddpropertylink.floor == null){
                            toastr.error('Debe indicar la PLANTA en la que se encuentra la propiedad');
                        }
                        if($leftmenuaddpropertylink.description == null){
                            toastr.error('Debe indicar la DESCRIPCIÓN de la propiedad');
                        }
                        toastr.error('Error al dar de alta la propiedad');
                    }
                );
            }

            let i = 1;      // COUNTER, FOR CHECKBOX ID.

            this.createChk = function (obj) {
                if (obj !== undefined) {
                    let chk = document.createElement('input');  // CREATE CHECK BOX.
                    chk.setAttribute('checked', 'checked'); 
                    chk.setAttribute('class', 'details'); 
                    chk.setAttribute('ng-model', 'newdetail.name'); 
                    chk.setAttribute('type', 'checkbox');       // SPECIFY THE TYPE OF ELEMENT.
                    chk.setAttribute('id', obj);     // SET UNIQUE ID.
                    chk.setAttribute('value', obj);
                    chk.setAttribute('name', 'detail');
                    chk.setAttribute('ng-init', 'newdetail.selected=true')

                    let lbl = document.createElement('label');  // CREATE LABEL.
                    lbl.setAttribute('class', 'btn btn-outline-success btn-sm active');
                    lbl.setAttribute('for', 'prodName' + i);


                    /*let tilde = document.createElement('span');  // CREATE LABEL.
                    tilde.setAttribute('class', 'fa fa-check');*/

                    // CREATE A TEXT NODE AND APPEND IT TO THE LABEL.
                    lbl.appendChild(document.createTextNode(obj));

                    // APPEND THE NEWLY CREATED CHECKBOX AND LABEL TO THE <p> ELEMENT.
                    container.appendChild(chk);
                    container.appendChild(lbl);
                    //container.appendChild(tilde);

                    obj = '';
                    //document.getElementById(obj.id).focus();

                    i = i + 1;
                }else{
                    toastr.error('No puede agregar un nuevo detalle en blanco');
                }
            }

            /****** IMAGEN UPLOAD MICHAEL.M **********************************************************************************************/
            this.signature = {};
            this.img = [];
            this.guardar = false;
            this.upload = function (file, url, type ){
                Upload.upload({
                    url: url,
                    data: {
                        file: file,
                        extension: angular.isDefined(file.name) ? file.name.split('.')[file.name.split('.').length - 1] : 'png'
                    }
                }).then(function (resp) {
                    switch (type) {
                        case 'png':
                            this.signature.dataUrl = 'data:image/png;base64,' + resp.data;
                            break;
                        default:
                            $leftmenuaddpropertylink.logotipo = 'data:image/jpg;base64,' + resp.data;
                            //añado los datos al array newParteEncurso
                            $leftmenuaddpropertylink.img.push({logotipo:$leftmenuaddpropertylink.logotipo});
                            $leftmenuaddpropertylink.img_reparacion = $leftmenuaddpropertylink.img;

                            break;
                            
                    }


                }, function (error) {
                    
                    toastr.info('El fichero debe ser tipo  ' + type);

                },function (evt) {
                    let progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                   // console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
                });
               
            };
            this.uploadImg = function ( file ) {
                console.log('entró en this.uploadImg: file: '+ file)
                if (file){
                    this.upload(file, 'uploadLogo', 'jpg' );
                }
            };
            this.deleteImg = function(item){
                console.log(item)
                var index = $leftmenuaddpropertylink.img_reparacion.indexOf(item);
                console.log(index)
                $leftmenuaddpropertylink.img_reparacion.splice(index, 1);    
            };
        }
    ]
});

