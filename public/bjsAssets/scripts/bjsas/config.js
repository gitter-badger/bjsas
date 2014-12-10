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
	})
	.constant('expenseData', {
		color: '#fb6e52',
		label: "Expenses",
		data: [],
		bars: {
			order: 1,
			show: true,
			borderWidth: 0,
			barWidth: 0.4,
			lineWidth: .5,
			fillColor: {
				colors: [{
					opacity: 0.4
				}, {
					opacity: 1
				}]
			}
		}
	})
	.constant('salesData', {
		color: '#ffffff',
		label: "Sales",
		data: [],
		lines: {
			show: true,
			fill: true,
			fillColor: {
				colors: [{
					opacity: 0.3
				}, {
					opacity: 0
				}]
			}
		},
		points: {
			show: true
		}
	})
	.constant('barOptions', {
		legend: {
			show: false
		},
		xaxis: {
			tickDecimals: 0,
			color: '#c2c2cb'
		},
		yaxis: {
			min: 0,
			color: '#c2c2cb',
			tickFormatter: function (val, axis) {
				return "";
			},
		},
		grid: {
			hoverable: true,
			clickable: false,
			borderWidth: .2,
			aboveData: false,
			color: '#fbfbfb'
		},
		tooltip: true,
		tooltipOpts: {
			defaultTheme: false,
			content: '',
		}
	});

