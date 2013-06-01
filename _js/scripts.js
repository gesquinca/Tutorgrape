// @codekit-prepend "";

(function (window, document, $, R, undefined) { // put the vars you need and match them at the bottom
	"use strict"; // jshint ;_;
	// Stuff to do as soon as the DOM is ready;

// ==========================================================================
// Responsive Grid Hook and Image Loading
// ==========================================================================

	// Grid Conditionals
	var gridLogic = function () {
		// find grid size
		var label      = $('head').css('font-family');

		// do something with the grid size
		if (label === 'small') {
			console.log('label is small');

		} else {
			console.log(label);
			// something failed (Opera will fail)
			// responsiveImage('desktop');
		}
	};

	// init grid hook and contain func
	$(window).load(function () {
		gridLogic();
	});
	$(window).resize(function () {
		gridLogic();
	});

}(this, this.document, this.jQuery, this.Response)); // in global scope, this === window