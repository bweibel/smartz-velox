if ( 'loading' === document.readyState ) {
	// The DOM has not yet been loaded.
	document.addEventListener( 'DOMContentLoaded', init );
} else {
	// The DOM has already been loaded.
	init();
}

// Initiate the menus when the DOM loads.
function init() {
  console.log("test");
}
