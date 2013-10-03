/**
 * Alternative to console.log() that can easily be
 * turned on or off in different environments with
 * the debug variable 
 */
var debug = true; 
if(typeof _log != 'function') {
	function _log(s) {
		if(debug) { console.log(s);	}
	}
}

/**
 * Document ready. App code goes in here...
 */
jQuery(document).ready(function($) {

	// Your JavaScript goes here

});