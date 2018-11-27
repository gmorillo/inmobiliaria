import {template} from '../../app.js'

template.component('leftMenuPrincipalLink', {
    bindings: {profileBunddle:'<', visible: '<'},
    template: `
    	<div ng-if="$leftmenuprincipallink.visible">
			<div class=" active" id="left-menu-principal-link" role="tabpanel" aria-labelledby="dashboard-list">
				<div class="dashborad-box">
					<h4 class="title">Listado de propiedades</h4>
					<div class="section-body listing-table">
						<div class="table-responsive">
							<table st-table="$parent.$leftmenuprincipallink.propertiesTable" st-safe-src="$parent.$leftmenuprincipallink.profileBunddle" class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Publicación</th>
										<th>Negociación</th>
										<th>Precio</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="row in $parent.$leftmenuprincipallink.propertiesTable">
										<td><small> {%row.housingtype.name%} en {%row.address%}, {%row.number%}</small></td>
										<td><small>{%row.negotiation.name%}</small></td>
										<td class="rating"><strong>{%row.price%} &euro;</strong></td>
										<td class="status" >

											<a  ng-click="$leftmenuprincipallink.activateProperty($event, row)">
												<span class=" badge badge-pill badge-danger" ng-if="row.status == 0">
													Inactivo
												</span>
											</a>

											<a  ng-click="$leftmenuprincipallink.inactivateProperty($event, row)">
												<span class=" badge badge-pill badge-success" ng-if="row.status == 1">
													Activo
												</span>
											</a>
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
			</div>
    	</div>
    `,
    controllerAs: '$leftmenuprincipallink',
    controller:
    ['profile','toastr',
       
        function leftMenuPrincipalLinkF(profile,toastr) {
            let $leftmenuprincipallink = this;
            //$profileleftmenu.details = [];
            this.$onChanges = function(changesObj) {
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue)){
                    //profile.getAllProperties(profile).then(( response ) => { $leftmenuprincipallink.data = response.data });
                }
            };

            this.inactivateProperty = function ($event, row){
            	$event.stopPropagation();
                $event.preventDefault();
            	profile.pleaseInactivateProperty(row.id).then( function(response){
                    if(response.status === 200){
                        toastr.success('Se ha dado de baja a la propiedad correctamente');
                        row.status = !row.status; 
                    }
                }, function error(response){
                    toastr.error('ERROR: No se ha dado de baja a la propiedad');
                });
            }
            
            this.activateProperty = function ($event, row){
            	$event.stopPropagation();
                $event.preventDefault();
            	profile.pleaseActivateProperty(row.id).then( function(response){
                    if(response.status === 200){
                        toastr.success('Se ha dado de alta a la propiedad correctamente');
                        row.status = !row.status; 
                    }
                }, function error(response){
                    toastr.error('ERROR: No se ha dado de alta a la propiedad');
                });
            }
        }
    ]
});

