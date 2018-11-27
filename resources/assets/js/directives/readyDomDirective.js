/**
 * Created by agf on 17/05/2017.
 */
// <div class="hidden" ready-dom-directive></div>
import {template} from '../app.js';

template.directive('readyDomDirective', [function () {
    return function (scope, element, attr, ctrl) {
        element.removeClass('hidden');
    }
}]);
