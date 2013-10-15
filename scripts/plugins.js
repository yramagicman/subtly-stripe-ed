(function () { //jQuery function that adds a pad around menus
    'use strict';
    var x, jq;
    jq = jQuery.noConflict();

    //detect elements
    //if no custom menus, wrap child menu <li> in span.
    if (jq('ul.children').length) {
        x = jq('ul.children');
        x.wrap('<div class="pad">');
        jq('.children').show();
    }
    //if custom menus wrap sub-menu <li> in span.
    if (jq('ul.sub-menu').length) {
        x = jq('ul.sub-menu');
        x.wrap('<div class="pad">');
        jq('.sub-menu').show();
    }

})(); // end menus