<div ng-if="$leftmenuaddpropertylink.visible">
	<div   role="tabpanel" aria-labelledby="list-messages-list">
		<div class="dashborad-box">
			<div class="col-lg-12">
				<div class="submit-form">
					<form name="leftMenuAddPropertyLink" method="post" role="form" ng-submit="$leftmenuaddpropertylink.sendNewPropertyFormCtrl($event,leftMenuAddPropertyLink)" enctype="multipart/form-data">
						<input  type="hidden" name="_token" value="{{{ csrf_token() }}}" />
						<h3 class="heading mb-4">Agregar nueva propiedad</h3>
						<input  ng-model="$parent.$parent.$profilemain.data.id" name="user_id" type="text" class="form-control" hidden="hidden">
					  	<div class="row">
						    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						      	<div class="form-group" >
						      		<label for="bussiness">Negociación</label>
									<select
										required="required" 
										class="form-control"
										id="negotiation"
										name="negotiation"
										ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.negotiation track by option.id"
										ng-model="$parent.$leftmenuaddpropertylink.negotiationselected"
                                    >
									</select>
									<input required="required" type="text" hidden="hidden"  ng-model="$parent.$leftmenuaddpropertylink.negotiationselected.id" name="negotiationSelected" id="negotiationSelected">
								</div>
						    </div>
					    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						      	<div class="form-group">
						      		<label for="PropertyType" >Tipo de vivienda</label>
									<select
										required="required" 
										class="form-control"
										name="PropertyType"
										ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.housingtype track by option.id"
										ng-model="$parent.$leftmenuaddpropertylink.housingtypeselected"
									>
									</select>
									<input required="required" type="text" hidden="hidden"  ng-model="$parent.$leftmenuaddpropertylink.housingtypeselected.id" name="housingtypeSelected">
								</div>
						    </div>
					  	</div>
					  	<div class="row">
						    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						      	<div class="form-group">
							  		<label for="centruryType" >Tipo de inmueble</label>
							  		<select
							  			required="required" 
						  				class="form-control"
										name="centruryType"
										ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.propertytype track by option.id"
										ng-model="$parent.$leftmenuaddpropertylink.propertytypeselected"
									>
									</select>
									<input required="required" type="text" hidden="hidden"  ng-model="$parent.$leftmenuaddpropertylink.propertytypeselected.id" name="propertytypeSelected">
							  	</div>
						    </div>
					    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
					    		<div class="form-group">
					    			<label for="equipment" >Equipamiento</label>
							      	<select
							      		required="required" 
										class="form-control"
										name="equipment"
										ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.equipment track by option.id"
										ng-model="$parent.$leftmenuaddpropertylink.equipmentselected"
							      	>
									</select>
									<input required="required" type="text" hidden="hidden"  ng-model="$parent.$leftmenuaddpropertylink.equipmentselected.id" name="equipmentSelected">
					    		</div>
						    </div>
					  	</div>
					  	<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label for="rooms" >Nº de Habitaciones</label>
									<input required="required" ng-model="$leftmenuaddpropertylink.habs" name="habs" type="number" id="habs" class="form-control" required="required" ng-change="$leftmenuaddpropertylink.range(1,$leftmenuaddpropertylink.habs)">
								</div>

							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label for="bath" >Nº de Baños</label>
									<input required="required" ng-model="$leftmenuaddpropertylink.bath" name="bath" type="number" id="bath" class="form-control">
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label for="price" >Precio</label>
									<input required="required" ng-model="$leftmenuaddpropertylink.price" name="price" type="number" id="price" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<h3 class="heading mb-4 mt-3">Dirección</h3>
						    <div class="row">
						    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<label for="address">Calle/Avenida/Carretera</label>
						    		<input required="required" ng-model="$leftmenuaddpropertylink.address" name="address" type="text" class="form-control" id="address" placeholder="Calle Santiago de compostela">
						    	</div>
						    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						    		<label for="number">Nº de Calle/Avenida/Carretera</label>
						    		<input required="required" ng-model="$leftmenuaddpropertylink.number" name="number" type="number" class="form-control" id="number" placeholder="Número de Calle/Avenida/Carretera">
						    	</div>
						    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-md-3">
						    		<label for="cp">Código postal</label>
						    		<input required="required" ng-model="$leftmenuaddpropertylink.cp" name="cp" type="number" class="form-control" id="cp" placeholder="Código postal">
						    	</div>
						    	<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-md-3">
						    		<div class="form-group">
						    			<label for="city" >Ciudad</label>
								      	<select
								      		required="required" 
									      	class="form-control"
											name="city"
											ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.city track by option.id"
											ng-model="$parent.$leftmenuaddpropertylink.cityselected">
								      		
								      	</select>
								      	<input required="required" type="text" hidden="hidden"  ng-model="$parent.$leftmenuaddpropertylink.cityselected.id" name="citySelected">									
									</div>
						    	</div>
						    </div>
						    <!--<div class="my-4">
						    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6079.192006243517!2d-3.6461047609887225!3d40.37348147517676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42244aab4206e5%3A0x3c13d4a9d7dd0966!2sCalle+Casas+de+Miravete%2C+28031+Madrid!5e0!3m2!1ses!2ses!4v1538466243295" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
						    	</iframe>
						    </div>-->
					  	</div>
					  	<div class="form-group">
							<h3 class="heading mb-4 mt-3">Características</h3>
						    <div class="row">
						    	<div class="col">
						    		<div class="form-group">
									    <label for="mt2">Superficie m²</label>
									    <div class="input-group mb-2">
									        <input required="required" ng-model="$leftmenuaddpropertylink.area" name="area" type="number" class="form-control" id="area" placeholder="Superficie m²">
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
									        <input required="required" ng-model="$leftmenuaddpropertylink.antiquity" name="antiquity" type="number" class="form-control" id="antiquity" placeholder="Años de antiguadad">
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
									        <input required="required" ng-model="$leftmenuaddpropertylink.floor" name="floor" type="text" class="form-control" id="floor" placeholder="Sótano, Planta 3, Ático...">
								      	</div>
								  	</div>
						    	</div>
						    </div>
						</div>
						<div class="form-group" >
							<h3 class="heading mb-4 mt-3">Detalles</h3>
						    <div class="row text-center" id="cblist">
								<div class="btn-group" data-toggle="buttons" ng-repeat="detailname in $leftmenuaddpropertylink.details">
									<div class="col">
										<label class="btn btn-outline-success btn-sm" >
											<input required="required" 
												type="checkbox" 
												class="details" 
												ng-model="detailname.selected" 
												name="detail" 
												id="{%detailname.name%}"
												ng-init="detailname.selected=false"
											>
											{%detailname.name%}
											<span class="fa fa-check"></span>
										</label>
									</div>					
								</div>
							    <inpunt id="container"></inpunt>
							</div>

						</div>
				    	
						<!-- add  new checkboxes-->
						
						<div class="input-group mb-3">
						  	<input ng-model="$leftmenuaddpropertylink.newdetail.name" ng-init="newdetail.selected=true" id="prod"  type="text"  class="form-control" placeholder="Agregar detalles adicionales" aria-label="Agregar detalles adicionales" aria-describedby="btnSave" >
						  	<div class="input-group-append">
						    	<button class="btn btn-outline-primary" ng-click="$leftmenuaddpropertylink.createChk($leftmenuaddpropertylink.newdetail.name)" type="button" value="ok" id="bt">Agregar</button>
						  	</div><br />
						</div>
						<!--<div class="input-group mb-3">
						  	<input required="required" type="text" id="txtName" class="form-control" placeholder="Agregar detalles adicionales" aria-label="Agregar detalles adicionales" aria-describedby="btnSave" >
						  	<div class="input-group-append">
						    	<button class="btn btn-outline-primary" ng-click="$leftmenuaddpropertylink.addCheckboxes(name)" type="button" value="ok" id="btnSave">Agregar</button>
						  	</div><br />
						</div>-->
						<small class="d-none text-danger" id="help">Este campo no puede estar en blanco</small>
						<!-- END add  new checkboxes-->
	
						<div class="form-group">
							<h3 class="heading mb-4 mt-5">Descripción de la propiedad</h3>
			                <textarea required="required" ng-model="$leftmenuaddpropertylink.description" name="description" id="textareaid" cols="30" rows="5" class="form-control" maxlength="2000"></textarea>
			                <!--<div class="float-right text-success"><small><span id="muestrocantidadcaracteresid">0</span> / 2000</small></div>-->


						</div>
	
						<div class="form-group">
							<h3 class="heading mb-4 mt-5">Imágenes de la propiedad</h3>      
							<!--<select
								required="required"
								class="form-control"
								name="divisions"
								ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.divisions track by option.id"
								ng-model="$parent.$leftmenuaddpropertylink.divisionsselected"
							>
							</select>
					      	<input required="required" type="text" hidden="hidden"	  ng-model="$parent.$leftmenuaddpropertylink.divisionsselected.id" name="divisionsselected">-->  	
                            <section>
								<div class="form-group" >      
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
										<div class="row text-center">
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left p-5" style="padding: 15px; border: 1px solid #3490dc;">
												<label  class="btn btn-outline-primary btn-file w-50">
													<i class="fa fa-camera" aria-hidden="true"></i> Subir/Capturar imágenes 
													<input type="file" accept="image/*" capture="camera" id="camera"  class="form-control"  ngf-select ng-model="$parent.$leftmenuaddpropertylink.file" name="file" style="display: none;" ng-change="$leftmenuaddpropertylink.uploadImg($leftmenuaddpropertylink.file)">
												</label>
												<small>{%$parent.$leftmenuaddpropertylink.file.name%}</small>
											</div>
											<!--<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 float-right" style="padding: 15px">
												<button style="width:100%" class="btn btn-success" type="submit"   formnovalidate > <i class="fa fa-upload"></i> Añadir</button>
											</div>-->
										</div>
									</div>
								</div>
								<div class="form-group" >       
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 8px;">
										<div class="row" st-safe-src="img">
											<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" ng-repeat="o in $parent.$leftmenuaddpropertylink.img_reparacion">
												<div class="thumbnails">
													{%o.name%}
														<img style="width: 100%; height: auto" class=" position-relative img-responsive center-block" ng-src="{% o.logotipo%}" title="img">
													<div class="caption position-absolute" style="top:0;">
														<p align="center">
															<a style="width: 100%;" href="#" class=" mt-0 btn btn-danger btn-sm" ng-click="$leftmenuaddpropertylink.deleteImg(o);" role="button"><small><i class="fa fa-trash" aria-hidden="true"> Borrar</i></small></a>
														</p>
													</div>  
												</div>

											</div>
										</div>
									</div>
								</div>
							</section>
                            <div ng-model="$leftmenuaddpropertylink.file.name" ng-repeat="img in $leftmenuaddpropertylink.file">
                            	<p>{%img.name%}</p>
                            </div>
						</div>
	
						<!--<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						      	<div class="form-group">
						      		<h3 class="heading mb-4 mt-5">Imágenes Adicionales</h3>
									<select
										required="required"
										class="form-control"
										name="divisions"
										ng-options="option.name for option in $parent.$leftmenuaddpropertylink.profileBunddle.divisions track by option.id"
										ng-model="$parent.$leftmenuaddpropertylink.divisionsselected"
									>
									</select>
							      	<input required="required" type="text" 	  ng-model="$parent.$leftmenuaddpropertylink.divisionsselected.id" name="divisionsselected">
									
		                            <section>
										<div class="form-group" >      
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
												<div class="row text-center">
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left " style="padding: 15px">
														<label  class="btn btn-outline-primary btn-file w-50">
															<i class="fa fa-camera" aria-hidden="true"></i> Subir/Capturar imágenes 
															<input type="file" accept="image/*" capture="camera" id="camera"  class="form-control"  ngf-select ng-model="$parent.$leftmenuaddpropertylink.otherfile" name="otherfile" style="display: none;" ng-change="$leftmenuaddpropertylink.uploadOtherImg($leftmenuaddpropertylink.otherfile)">
														</label>
														<small>{%$parent.$leftmenuaddpropertylink.otherfile.name%}</small>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group" >       
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: 8px;">
												<div class="row" st-safe-src="img">
													<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3" ng-repeat="other in $leftmenuaddpropertylink.img_reparacion_other">
														<div class="thumbnails">
															{%other.name%}
																<img style="width: 100%; height: auto" class=" position-relative img-responsive center-block" ng-src="{% other.otherlogotipo%}" title="img_other">
															<div class="caption position-absolute" style="top:0;">
																<p align="center">
																	<a style="width: 100%;" href="#" class=" mt-0 btn btn-danger btn-sm" ng-click="$leftmenuaddpropertylink.deleteImg(other);" role="button"><small><i class="fa fa-trash" aria-hidden="true"> Borrar</i></small></a>
																</p>
															</div>  
														</div>

													</div>
												</div>
											</div>
										</div>
									</section>
		                            <div ng-model="$leftmenuaddpropertylink.otherfile.name" ng-repeat="otherimg in $leftmenuaddpropertylink.otherfile">
		                            	<p>{%otherimg.name%}</p>
		                            </div>
								</div>
						    </div>
						</div>-->
						

						<input required="required" type="submit" class="btn btn-outline-primary w-100 mt-4" formnovalidate> </input>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>




<style>
	.btn span.fa-check {    			
	opacity: 0;				
}
.btn.active span.fa-check {				
	opacity: 1;				
}
input[class="details"] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    opacity: 0 !important;
}

input[type="checkbox"] {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0;
    opacity: 0 !important;
}
.files input {
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{      outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 20px;
    content: " O arrastra tus imágenes hasta acá ";
    display: block;
    margin: 0 auto;
    color: #3490dc;
    font-weight: 600;
    text-align: center;
}
.files input.smallInputFile {
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 114px 0px 85px 16%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
    font-size: 10px;
}

</style>