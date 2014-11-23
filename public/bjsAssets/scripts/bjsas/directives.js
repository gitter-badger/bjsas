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
				attrs.$observe( 'regTemplate', function( tpl ){
					scope.contentUrl = '';
					if( angular.isDefined( tpl ) ) {
						scope.contentUrl = tpl;
						scope.csrf_token = CSRF_TOKEN;
					}
				} );
			},
		};
	} )
	.directive('tooltipShow', ['$timeout',
		function( $timeout ) {
			return {
				restrict: 'A',
				link: function(scope, element, attrs){
					scope.$watch('requestResult', function( data ) {
						$(element).removeClass( 'has-error' );
						$( '.message-box' ).removeClass( 'animated zoomOut hide' );
						if( data && data.type==='error' ) {
							if( data.errors[ attrs['field'] ] ) {
								$(element).addClass( 'has-error' );
								$(element).tooltip('show');
							}
						}

						$timeout(function() {
							$( '.message-box' ).addClass( 'animated zoomOut hide' );
						}, 5000);

					});
				}
			};
		}
	] )
	.directive('leavePlurality', function () {
		return {
			template : 'Total no. of hour{{label.leave}} on leave'
		};
	} );
