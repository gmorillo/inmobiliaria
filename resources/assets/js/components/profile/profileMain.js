import {template} from '../../app.js'

template.component('profileMain', {
    template: `
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <profile-left-menu profile-bunddle="$profilemain.data" menu-left-click="$profilemain.clickMenu(vista)"></profile-left-menu>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <profile-header profile-bunddle="$profilemain.data"></profile-header>
                    <left-menu-principal-link profile-bunddle="$profilemain.myproperties" visible="$profilemain.principal"></left-menu-principal-link>
                    <left-menu-my-account-link profile-bunddle="$profilemain.data" visible="$profilemain.micuenta"></left-menu-my-account-link>
                    <left-menu-add-property-link  profile-bunddle="$profilemain.selects" profile-bunddle="$profilemain.propertytypes" visible="$profilemain.agregarpropiedad" ></left-menu-add-property-link>
                    <left-menu-my-properties-link   profile-bunddle="$profilemain.myproperties" visible="$profilemain.mispropiedades" ></left-menu-my-properties-link>
                </div>
            </div>
            <edit-property ></edit-property>
        </div>
    `,
    // alias, forma que se identifica en la vista
    controllerAs: '$profilemain',
    controller:
    ['profile', '$location',
       
        function profileMain(profile, $location) {
            
            let $profilemain = this;
            
            this.principal = true;
            this.micuenta = false;
            this.agregarpropiedad = false;
            this.mispropiedades = false;
            this.$onInit = function() {
                profile.getUserProfile(profile).then(( response ) => { $profilemain.data = response.data });
                profile.getAllProperties(profile).then(( response ) => { $profilemain.myproperties = response.data });
                profile.getAllselects(profile).then(( response ) => { $profilemain.selects = response.data });
                //console.log($profilemain.selects);

            }

            this.clickMenu = function(vista){
                switch (vista) {
                    case 'dashboard-list':
                        this.principal = true;
                        this.micuenta = false;
                        this.agregarpropiedad = false;
                        this.mispropiedades = false;
                    break;

                    case 'list-profile-list':
                        this.principal = false;
                        this.micuenta = true;
                        this.agregarpropiedad = false;
                        this.mispropiedades = false;
                    break;

                    case 'list-messages-list':
                        this.principal = false;
                        this.micuenta = false;
                        this.agregarpropiedad = true;
                        this.mispropiedades = false;
                    break;

                    case 'list-settings-list':
                        this.principal = false;
                        this.micuenta = false;
                        this.agregarpropiedad = false;
                        this.mispropiedades = true;
                    break;

                    case 'password-change':
                    // statements_1
                    break;
                }
            }
        }
    ]
});