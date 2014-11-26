'use strict';

angular.module('config', [])
	.constant('toasterConfig', {
		'limit'               : 0,
		'tap-to-dismiss'      : true,
		'close-button'        : true,
		'newest-on-top'       : true,
		'fade-in'             : 1000,
		'time-out'            : 5000,
		'icon-classes' : {
			error: 'toast-error',
			info: 'toast-info',
			success: 'toast-success',
			warning: 'toast-warning'
		},
		'body-output-type' : '',
		'body-template'    : 'toasterBodyTmpl.html',
		'icon-class'       : 'toast-info',
		'position-class'   : 'toast-top-right',
		'title-class'      : 'toast-title',
		'message-class'    : 'toast-message'
	});

