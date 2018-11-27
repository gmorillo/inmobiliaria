import {template} from '../../app.js'

template.component('leftMenuMyPropertiesLink', {
    bindings: {profileBunddle:'<', visible: '<'},
    template: `
	    <div ng-if="$leftmenumypropertieslink.visible">
	    	<div class="" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
				<div class="dashborad-box">
					<table st-table="$parent.$leftmenumypropertieslink.myPropertiesTable" st-safe-src="$parent.$leftmenumypropertieslink.profileBunddle" class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Propiedad</th>
								<th scope="col">Descripción</th>
								<th scope="col">Creación</th>
								<th scope="col">Estado</th>
								<th scope="col">Acciones</th>
							</tr>
						</thead>
					  	<tbody>
						    <tr ng-repeat="row in $parent.$leftmenumypropertieslink.myPropertiesTable">
						      	<td scope="row">
						      		<li class="media">
					      					<img class="mr-3 img-fluid mx-auto" width="120" src="http://preview.uideck.com/items/brittville-demo/assets/img/property/house-1.jpg" alt="Generic placeholder image">
					      				</a>
						      		</li>
						      	</td>
								<td>
									<div class="media-body ">
										<small>
											<strong>
												{%row.negotiation.name%} de 
												<span class="text-lowercase">{%row.housingtype.name%} <br />
											</strong>
											<i class="fas fa-map-marker-alt"></i> {%row.address%}, {%row.number%}</span> - 
											<span class="text-capitalized">{%row.city.name%}</span>, {%row.cp%}
										</small>
									</div>
								</td>
						      	<td><small>26/08/2018</small></td>
						      	<td>
						      		<span class=" badge badge-pill badge-danger" ng-if="row.status == 0">
										Inactivo
									</span>
									<span class=" badge badge-pill badge-success" ng-if="row.status == 1">
										Activo
									</span>
								</td>
						      	<td>
						      		<a href="/edit-property/{%row.id%}"  data-toggle="modal" data-target="#bd-example-modal-lg2" ng-click="$leftmenumypropertieslink.editPropertyClick($event, row)">
						      			<i class="far fa-edit text-primary"></i>
					      			</a> &nbsp;&nbsp;&nbsp;
					      			<a 	
					      				ng-click="$leftmenumypropertieslink.deleteProperty($event, row)">
					      				<i class="fas fa-trash-alt text-danger"></i>
					      			</a>
					      			<h5 class="mt-3 text-center"><strong>{%row.price%} &euro;</strong></h5>
					      		</td>
						    </tr>
					  	</tbody>
					  	<tfoot>
				            <tr>
				                <td colspan="12"  class="text-center pt-4">
				                    <div st-pagination="" st-items-by-page="10" st-displayed-pages="7"></div>
				                </td>
				            </tr>
			            </tfoot>
					</table>
				</div>
			</div>
		</div>
    `,
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$leftmenumypropertieslink',
    controller:
    ['profile','$uibModal', 'toastr',
       
        function leftMenuMyPropertiesLinkF(profile, $uibModal, toastr) {
            
            let $leftmenumypropertieslink = this
            
            //$profileleftmenu.details = [];
            this.$onChanges = function(changesObj) {
                //profile.getUserProfile(profile).then(( response ) => { $profileleftmenu.data = response.data });
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue))
                {
                	//console.log(changesObj.profileBunddle)
                    //profile.getAllProperties(profile).then(( response ) => { $leftmenumypropertieslink.data = response.data });
                    
                }
            };



            this.editPropertyClick = function ($event, row){
            	this.selected = false;
            	$event.stopImmediatePropagation();
            	$event.preventDefault();
            	//console.log(row)
            	let index = $leftmenumypropertieslink.myPropertiesTable.indexOf(row);
            	

                profile.editProperty(row.id).then( 
                	function(response){	
                        if(response.status === 200){
                        	$leftmenumypropertieslink.editPropertyModal = response.data;
                        	$uibModal.open({
			                    //animation: ctrl.animationsEnabled,
			                    ariaLabelledBy: 'modal-title',
			                    ariaDescribedBy: 'modal-body',
			                    template: 
			                    `
									<div class="modal-header">
										<h3 class="modal-title">{%$resolve.property.property.housingtype.name%} en {%$resolve.property.property.address%}, {%$resolve.property.property.number%}</h3>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div   role="tabpanel" aria-labelledby="list-messages-list">
											<div >
												<div class="col-lg-12">
													<div class="submit-form">
														<form name="formEdit"  method="post" role="form" >
															<input  type="hidden" name="_token" value="{{ csrf_token() }}" />
															<input  ng-model="$resolve.property.property.user_id" name="user_id" type="text" class="form-control" hidden="hidden">
															<div class="dashborad-box">
																<h3 class="heading mb-4">Editar propiedad propiedad </h3>
															  	<div class="row">
																    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
																      	<div class="form-group" >
																      		<label for="bussiness">Negociación</label>
																			<select
																				class="form-control"
																				id="negotiation"
																				name="negotiation"
																				ng-options="option.name for option in $resolve.property.negotiation track by option.id"
																				ng-model="$resolve.property.property.negotiation"
											                                >
																			</select>
																			<input hidden="hidden" type="text" ng-model="$resolve.property.property.negotiation.name" name="negotiationSelected" id="negotiationSelected">
																		</div>
																    </div>
															    	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
																      	<div class="form-group">
																      		<label for="PropertyType" >Tipo de vivienda</label>
																			<select
																				 
																				class="form-control"
																				name="PropertyType"
																				ng-options="option.name for option in $resolve.property.housingtype track by option.id"
																				ng-model="$resolve.property.property.housingtype"
																			>
																			</select>
																			<input  type="text" hidden="hidden"   ng-model="$resolve.property.property.housingtype.name" name="housingtypeSelected">
																		</div>
																    </div>
																    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
																      	<div class="form-group">
																	  		<label for="centruryType" >Tipo de inmueble</label>
																	  		<select
																	  			 
																  				class="form-control"
																				name="centruryType"
																				ng-options="option.name for option in $resolve.property.propertytype track by option.id"
																				ng-model="$resolve.property.property.propertytype"
																			>
																			</select>
																			<input  type="text" hidden="hidden"   ng-model="$resolve.property.property.propertytype.id" name="propertytypeSelected">
																	  	</div>
																    </div>
															    	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
															    		<div class="form-group">
															    			<label for="equipment" >Equipamiento</label>
																	      	<select
																	      		 
																				class="form-control"
																				name="equipment"
																				ng-options="option.name for option in $resolve.property.equipment track by option.id"
																				ng-model="$resolve.property.property.equipment"
																	      	>
																			</select>
																			<input  type="text" hidden="hidden" ng-model="$resolve.property.property.equipment_id" name="equipmentSelected">
															    		</div>
																    </div>
															  	</div>
				
															  	<div class="row">
																	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
																		<div class="form-group">
																			<label for="rooms" >Nº de Habitaciones</label>
																			<input  ng-model="$resolve.property.property.habs" name="habitaciones" type="number" class="form-control" >
																		</div>

																	</div>
																	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
																		<div class="form-group">
																			<label for="bath" >Nº de Baños</label>
																			<input  ng-model="$resolve.property.property.bath" name="bath" type="number" id="bath" class="form-control">
																		</div>
																	</div>
																	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
																		<div class="form-group">
																			<label for="price" >Precio</label>
																			<input  ng-model="$resolve.property.property.price" name="price" type="number" id="price" class="form-control">
																		</div>
																	</div>
																</div>
															</div>
															<div class="form-group dashborad-box">
																<h3 class="heading mb-4 mt-3">Dirección</h3>
															    <div class="row">
															    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
															    		<label for="address">Calle/Avenida/Carretera</label>
															    		<input  ng-model="$resolve.property.property.address" name="address" type="text" class="form-control" id="address" placeholder="Calle Santiago de compostela">
															    	</div>
															    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
															    		<label for="number">Nº de Calle/Avenida/Carretera</label>
															    		<input  ng-model="$resolve.property.property.number" name="number" type="text" class="form-control" id="number" placeholder="Número de Calle/Avenida/Carretera">
															    	</div>
															    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-md-3">
															    		<label for="cp">Código postal</label>
															    		<input  ng-model="$resolve.property.property.cp" name="cp" type="text" class="form-control" id="cp" placeholder="Código postal">
															    	</div>
															    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-md-3">
															    		<div class="form-group">
															    			<label for="city" >Ciudad</label>
																	      	<select																      		 
																		      	class="form-control"
																				name="city"
																				ng-options="option.name for option in $resolve.property.city track by option.id"
																				ng-model="$resolve.property.property.city">
																	      	</select>
																	      	<input  type="text" hidden="hidden"  ng-model="$resolve.property.property.city.id" name="citySelected">									
																		</div>
															    	</div>
															    </div>
															    <!--<div class="my-4">
															    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6079.192006243517!2d-3.6461047609887225!3d40.37348147517676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42244aab4206e5%3A0x3c13d4a9d7dd0966!2sCalle+Casas+de+Miravete%2C+28031+Madrid!5e0!3m2!1ses!2ses!4v1538466243295" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
															    	</iframe>
															    </div>-->
														  	</div>
														  	<div class="form-group dashborad-box">
																<h3 class="heading mb-4 mt-3">Características</h3>
															    <div class="row">
															    	<div class="col">
															    		<div class="form-group">
																		    <label for="mt2">Superficie m²</label>
																		    <div class="input-group mb-2">
																		        <input  ng-model="$resolve.property.property.area" name="area" type="number" class="form-control" id="area" placeholder="Superficie m²">
																		        <div class="input-group-prepend">
																		          <div class="input-group-text">m²</div>
																		        </div>
																	      	</div>
																	  	</div>
															    	</div>
															    	<div class="col">
															    		<div class="form-group">
																		    <label for="antiquity">Antiguedad</label>
																	      	<div class="input-group mb-2">
																		        <input  ng-model="$resolve.property.property.antiquity" name="antiquity" type="text" class="form-control" id="antiquity" placeholder="Años de antiguadad">
																		        <div class="input-group-prepend">
																		          <div class="input-group-text">Año(s)</div>
																		        </div>
																	      	</div>
																	  	</div>
															    	</div>
															    	<div class="col">
															    		<div class="form-group">
																		    <label for="floor">Planta</label>
																		    <div class="input-group mb-2">
																		        <input  ng-model="$resolve.property.property.floor" name="floor" type="text" class="form-control" id="floor" placeholder="Sótano, Planta 3, Ático...">
																	      	</div>
																	  	</div>
															    	</div>
															    </div>
															</div>
															<div class="form-group dashborad-box" >
																<h3 class="heading mb-4 mt-3">Detalles</h3>
															    <div class="row text-center" id="cblist">
																	<div class="btn-group" data-toggle="buttons" ng-repeat="detailname in $resolve.property.details">
																		<div class="col">
																		<span class=" badge badge-pill badge-danger" ng-if="row.status == 0">
																			Inactivo
																		</span>
																			<label class="btn btn-outline-success btn-sm active" >
																				<input  
																					type="checkbox" 
																					class="details" 
																					ng-model="detailname.selected" 
																					name="{%detailname.name%}" 
																					id="{%detailname.name%}"
																					ng-init="detailname.selected=true"
																				>
																				{%detailname.name%}
																				<span class="fa fa-check"></span>
																			</label>
																			<input type="text" ng-model="detailname.selected" />
																		</div>
																	</div>
																	<inpunt id="container"></inpunt>
																</div><br />
																<!-- add  new checkboxes-->
																<div class="input-group mb-3">
															  		<input ng-model="newdetail.name" ng-init="newdetail.selected=true" id="prod"  type="text"  class="form-control" placeholder="Agregar detalles adicionales" aria-label="Agregar detalles adicionales" aria-describedby="btnSave" >
															  		<div class="input-group-append">
															  		<button class="btn btn-outline-primary" ng-click="$ctrl.createChk(newdetail.name)" type="button" value="ok" id="bt">Agregar</button>
															  		</div><br />
																</div>
																<!-- END add  new checkboxes-->
															</div>
															

															<div class="form-group dashborad-box">
															<div class="mb-4 mt-4">
																<h3 class="heading pb-4">Descripción de la propiedad</h3>
												                <textarea  ng-model="$resolve.property.property.description" name="description" id="textareaid" cols="30" rows="5" class="form-control" maxlength="2000"></textarea>
												                <!--<div class="float-right text-success"><small><span id="muestrocantidadcaracteresid">0</span> / 2000</small></div>-->
															</div>
															</div>

															<div class="form-group">
																<h3 class="heading mb-4 mt-5">Imágenes</h3>
																<div class="form-group files my-5">
													                <h5><strong>Sube las imágenes principales de tu propiedad</strong> </h5>
													                <input  type="file" class="form-control" multiple="">
												              	</div>
															</div>

															<div class="row">
																<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
															      	<div class="form-group">
															      		<h3 class="heading mb-4 mt-5">Imágenes Adicionales</h3>
																		<select																      		 
																	      	class="form-control"
																			name="city"
																			ng-options="option.name for option in $resolve.property.divisions track by option.id"
																			ng-model="$resolve.property.property.divisions">
																      	</select>
																      	<input  type="text" hidden="hidden"  ng-model="$resolve.property.property.divisions.id" name="citySelected">			
																	</div>
															    </div>
															</div>
															
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button  type="button" class="btn btn-primary"  ng-click="$ctrl.updatePropertyForm($event, $resolve.property.property.id, formEdit, $resolve.property.details)">Guardar cambios</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal" ng-click="$ctrl.cancel($event)">Close</button>
									</div>
								`,
			                    controller: ['$uibModalInstance', function EditModal($uibModalInstance){

			                    	this.updatePropertyForm = function($event, id, form, detalles){
			                    		$event.stopPropagation();
						                $event.preventDefault();
						                form.details = detalles;
						                profile.updateProperty({id:id, form:form}).then( function(response)
						                    {
						                        if(response.status === 200){
						                        	$uibModalInstance.dismiss('cancel');
						                            toastr.success('Datos modificados con éxito');
						                        }
						                    },
						                    function error(response){
						                        toastr.error('No se han podido modificar los datos');
						                    }
						                );

						                profile.editPropertyDetails({id:id, form:form})
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

						            this.cancel = function ($event) {
								        $event.stopImmediatePropagation();
								        $event.preventDefault();  
								        $uibModalInstance.dismiss('cancel');
								    }
			                    }],
			                    controllerAs: '$ctrl',
			                    size: 'lg',
			                    appendTo: $(document).body,
			                    resolve: {
			                        property: () => $leftmenumypropertieslink.editPropertyModal
			                    }
			                }).result.then(function (data) {

			                }, function () {})
                        }
                    },
                    function error(response){
                        toastr.error('No se han podido actualizar la propiedad');
                    },
                );
            }

            


            

            this.deleteProperty = function($event,row){
            	$event.stopPropagation();
                $event.preventDefault();
                var conf = confirm("¿Desea eliminar esta propiedad de manera permanente?");
                let index = $leftmenumypropertieslink.myPropertiesTable.indexOf(row);
                if(conf == true){
                	profile.deleteProperty(row.id).then( function(response)
	                    {	
	                        if(response.status === 200){
	                        	$leftmenumypropertieslink.myPropertiesTable.splice(index, 1);
	                            toastr.success('Propiedad eliminada correctamente');
	                        }
	                    },
	                    function error(response){
	                        toastr.error('No se ha podido eliminar la propiedad');
	                    }
	                );
                }else{
                	toastr.error('La propiedad no ha sido eliminada');
                }
            }
        }
    ]
});



