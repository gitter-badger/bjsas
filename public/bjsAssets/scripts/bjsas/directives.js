'use strict';

angular.module('directives', [])
	.directive('selectPicker', ['$timeout',
		function($timeout) {
			return {
				restrict: 'A',
				//added attribute
				link: function(scope, elem, attr) {
					$timeout(function() {
						elem.selectpicker({
							howSubtext: true
						});
					}, 10);

					scope.$watch(attr.selectPicker, function(newValue, oldValue) {
						if (newValue === oldValue) {
							return;
						}

						$timeout(function() {
							elem.selectpicker('refresh');
						}, 100);
					} );
				}
			};
		}
	] )
	.directive( 'showTemplate', function ( CSRF_TOKEN ) {
		return {
			scope    : true,
			template : '<div ng-include="contentUrl" class="row animated fadeInDown ng-scope"></div>',

			link : function(scope, element, attrs) {
				attrs.$observe( 'template', function( tpl ){
					scope.contentUrl = '';
					if( angular.isDefined( tpl ) ) {
						scope.contentUrl = tpl;
						scope.csrf_token = CSRF_TOKEN;
					}
				} );
			},
		};
	} )
	.directive('tooltipShow', function(){
		return {
			restrict: 'A',
			link: function(scope, element, attrs){
				$(element).tooltip('show');
			}

		};
	} )
	.directive('leavePlurality', function () {
		return {
			template : 'Total no. of hour{{label.leave}} on leave'
		};
	} );
