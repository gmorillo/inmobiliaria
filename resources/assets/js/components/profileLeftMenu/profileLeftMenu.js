import {template} from '../../app.js'

template.component('profileLeftMenu', {
    bindings: {profileBunddle:'<', menuLeftClick: '&'},
    templateUrl: 'profile-left-menu.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$profileleftmenu',
    controller:
    ['profile',
       
        function profileLeftMenu(profile) {
            
            let $profileleftmenu = this
            //$profileleftmenu.details = [];
            this.$onChanges = function(changesObj) {
                //profile.getUserProfile(profile).then(( response ) => { $profileleftmenu.data = response.data });
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue)){
                    $profileleftmenu.datos = changesObj.profileBunddle.currentValue;
                }
            };

            this.menuClick = function ($event){
                $event.preventDefault();
                $event.stopImmediatePropagation();
                $profileleftmenu.menuLeftClick({vista:$event.target.attributes.id.nodeValue});
            };
        }
    ]
});
