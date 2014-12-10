'use strict';

angular.module('services', ['angularMoment', 'ngAnimate'])
	.factory('Api', function($http) {
		return {
			get : function( query, model ) {
				return $http.get('/api/v1/' + model + '/' + query);
			},
			create : function( data, model ) {
				return $http.post( '/api/v1/' + model, data);
			},
			delete : function( id, model) {
				return $http.delete('/api/v1/' + model + '/' + id)
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
