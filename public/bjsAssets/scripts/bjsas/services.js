'use strict';

angular.module('services', ['angularMoment', 'ngAnimate'])
	.factory('Employees', function($http) {
		return {
			get : function( query ) {
				return $http.get('/api/v1/employee/' + query);
			},
			create : function( data ) {
				return $http({
					method: 'POST',
					url: '/api/v1/employee?',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(data)
				});
			},
			delete : function(id) {
				return $http.delete('/api/v1/employee/' + id)
					success(function(data, status, headers, config) {
						console.log( data );
						console.log( status );
					}).
					error(function(data, status, headers, config) {
						console.log( data );
						console.log( status );
					});
			}
		};
	} )
	.service('toaster', ['$rootScope', function ($rootScope) {

		this.pop = function (type, title, body, timeout, bodyOutputType, clickHandler) {
			this.toast = {
				type           : type,
				title          : title,
				body           : body,
				timeout        : timeout,
				bodyOutputType : bodyOutputType,
				clickHandler   : clickHandler
			};

			$rootScope.$broadcast('toaster-newToast');
		};
		this.clear = function () {
			$rootScope.$broadcast('toaster-clearToasts');
		};
	}])
	.factory('DaysWorked', function() {
		return {
			count : function ( dateworked ) {
				var dateStart = moment(dateworked.start || 0);
				var dateEnd   = moment(dateworked.end || dateStart);

				return dateworked && dateEnd.diff(dateStart, 'days') + 1 || 0;
			}
		};
	} );
