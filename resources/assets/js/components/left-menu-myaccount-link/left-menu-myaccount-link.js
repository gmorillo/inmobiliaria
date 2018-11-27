import {template} from '../../app.js'

template.component('leftMenuMyAccountLink', {
    bindings: {profileBunddle:'<', visible: '<'},
    template: `
    	<div ng-if="$leftmenumyaccountlink.visible">
		    <div  id="left-menu-my-account-link" role="tabpanel" aria-labelledby="list-profile-list">
		        <div class="dashborad-box">
		            <h3 class="heading my-4">Información personal</h3>
		            <div class="section-inforamation">
			            <form name="myAccountForm" method="post" role="form" ng-submit="$leftmenumyaccountlink.sendForm($event,myAccountForm)">
			            	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			                <div class="row">
			                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                        <div class="form-group">
			                            <label>Nombre y Apellidos</label>
			                            <input ng-model="$leftmenumyaccountlink.profileBunddle.name" type="text" name="name" class="form-control"  >
			                        </div>
			                    </div>
			                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			                        <div class="form-group">
			                            <label>Correo electrónico</label>
			                            <input ng-model="$leftmenumyaccountlink.profileBunddle.email" type="text" name="email" class="form-control">
			                        </div>
			                    </div>
			                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
			                        <div class="form-group">
			                            <label>Teléfono de contacto</label>
			                            <input ng-model="$leftmenumyaccountlink.profileBunddle.phone" type="text" name="phone" class="form-control">
			                        </div>
			                    </div>
			                </div>
			                <div class="password-section my-4">
			                    <h3 class="my-4">Actualizar contraseña</h3>
			                    <div class="row">
			                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                            <div class="form-group">
			                                <label>Nueva contraseña</label>
			                                <input ng-model="$leftmenumyaccountlink.password" type="password" name="password" class="form-control" >
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <input type="submit" class="btn btn-outline-primary w-100 mt-2" ></input>
			            </form>
		            </div>
		        </div>
		    </div>
		</div>
    `,
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$leftmenumyaccountlink',
    controller:
    ['profile','toastr',
       
        function leftMenuMyAccountLinkF(profile, toastr) {
            
            let $leftmenumyaccountlink = this
            //$profileleftmenu.details = [];
            this.$onChanges = function(changesObj) {
                //profile.getUserProfile(profile).then(( response ) => { $profileleftmenu.data = response.data });
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue)){
                    /*console.log(changesObj.profileBunddle)
                    $profileleftmenu.datos = changesObj.profileBunddle.currentValue;*/
                }
            };

            this.sendForm = function($event,form){
                $event.stopPropagation();
                $event.preventDefault();
               	// $propertydetailform.email = $propertydetailform.priceBunddle;
               	form.idUsuario = $leftmenumyaccountlink.profileBunddle.id;
                profile.updateAccountForm(form).then( function(response)
                    {
                        if(response.status === 200){
                            toastr.success('Datos modificados con éxito');
                        }
                    },
                    function error(response){
                        toastr.error('No se han podido modificar los datos');
                    }
                );
            }
        }
    ]
});



