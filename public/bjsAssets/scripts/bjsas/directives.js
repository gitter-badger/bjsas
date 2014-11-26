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
				attrs.$observe( 'regTemplate', function( template ){
					scope.contentUrl = '';
					scope.csrf_token = '';
					if( angular.isDefined( template ) ) {
						scope.contentUrl = template;
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

						if( data && data.type==='error' ) {
							if( data.errors[ attrs['field'] ] ) {
								$(element).addClass( 'has-error' );
								$(element).tooltip('show');
							}
						}

						if( !scope.requestResult ) {
							$(element).tooltip('hide');
							console.log(attrs);
						}
					});
				}
			};
		}
	] )
	.directive('leavePlurality', function () {
		return {
			template : 'Total no. of hour{{label.leave}} on leave'
		};
	} )
	.directive('notificationContainer', ['$compile', '$timeout', '$sce', 'toasterConfig', 'toaster',
		function ($compile, $timeout, $sce, toasterConfig, toaster) {
		return {
			replace: true,
			restrict: 'EA',
			link: function (scope, elm, attrs) {

				var id = 0;

				var mergedConfig = toasterConfig;
				if (attrs.toasterOptions) {
					angular.extend(mergedConfig, scope.$eval(attrs.toasterOptions));
				}

				scope.config = {
					position    : mergedConfig['position-class'],
					title       : mergedConfig['title-class'],
					message     : mergedConfig['message-class'],
					tap         : mergedConfig['tap-to-dismiss'],
					closeButton : mergedConfig['close-button'],
					animation   : mergedConfig['animation-class']
				};

				scope.configureTimer = function configureTimer(toast) {
					var timeout = typeof (toast.timeout) == "number" ? toast.timeout : mergedConfig['time-out'];
					if (timeout > 0)
						setTimeout(toast, timeout);
				};

				function addToast(toast) {
					toast.type = mergedConfig['icon-classes'][toast.type];
					if (!toast.type)
						toast.type = mergedConfig['icon-class'];

					id++;
					angular.extend(toast, { id: id });

					// Set the toast.bodyOutputType to the default if it isn't set
					toast.bodyOutputType = toast.bodyOutputType || mergedConfig['body-output-type']
					switch (toast.bodyOutputType) {
						case 'trustedHtml':
							toast.html = $sce.trustAsHtml(toast.body);
							break;
						case 'template':
							toast.bodyTemplate = toast.body || mergedConfig['body-template'];
							break;
					}

					scope.configureTimer(toast);

					if (mergedConfig['newest-on-top'] === true) {
						scope.toasters.unshift(toast);
						if (mergedConfig['limit'] > 0 && scope.toasters.length > mergedConfig['limit']) {
							scope.toasters.pop();
						}
					} else {
						scope.toasters.push(toast);
						if (mergedConfig['limit'] > 0 && scope.toasters.length > mergedConfig['limit']) {
							scope.toasters.shift();
						}
					}
				}

				function setTimeout(toast, time) {
					toast.timeout = $timeout(function () {
						scope.removeToast(toast.id);
					}, time);
				}

				scope.toasters = [];
				scope.$on('toaster-newToast', function () {
					addToast(toaster.toast);
				});

				scope.$on('toaster-clearToasts', function () {
					scope.toasters.splice(0, scope.toasters.length);
				});
			},
			templateUrl : '/bjsAssets/partials/notification.html'
		};
	}])
