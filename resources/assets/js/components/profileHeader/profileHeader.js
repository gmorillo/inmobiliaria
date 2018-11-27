import {template} from '../../app.js'

template.component('profileHeader', {
    bindings: {profileBunddle:'<'},
    templateUrl: 'profile-header.html',
    //template:'<button type="button" class="btn btn-primary">Hola mundo</button>',
    controllerAs: '$profileheader',
    controller:
    ['profile',
       
        function profileheader(profile) {
            
            let $profileheader = this
            this.$onChanges = function(changesObj) {
                //profile.getUserProfile(profile).then(( response ) => { $profileleftmenu.data = response.data });
                if(angular.isDefined(changesObj.profileBunddle) && angular.isDefined(changesObj.profileBunddle.currentValue)){
                    $profileheader.datos = changesObj.profileBunddle.currentValue;
                }
            };
        }
    ]
});
