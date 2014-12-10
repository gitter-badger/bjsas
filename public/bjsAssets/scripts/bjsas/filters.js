'use strict';

angular.module('filters', [])
	.filter('dateFormat', function($filter) {
		return function(input)
		{
			if( input === null ) { return; }

			return $filter('date')(new Date(input), 'MM/dd/yyyy');
		};
	})
	.filter('dayFormat', function($filter) {
		return function(input)
		{
			if( input === null ) { return; }

			return $filter('date')(new Date(input), 'EEEE');
		};
	})
	.filter('monthFormat', function($filter) {
		return function(input)
		{
			if( input === null ) { return; }

			return $filter('date')(new Date(input), 'MMMM');
		};
	})
	.filter('yearFormat', function($filter) {
		return function(input)
		{
			if( input === null ) { return; }

			return $filter('date')(new Date(input), 'yyyy');
		};
	});
