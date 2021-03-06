<!DOCTYPE html>
@yield( 'head_wrapper' )

<head>
	<meta charset="utf-8">
	<title>BJS MotoShop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="We sell motorcycle parts while we modified to works for your needs.">
	<meta name="author" content="BJS MotoShop">

	{{ HTML::style( 'packages/bootstrap/dist/css/bootstrap.css' ) }}
	{{ HTML::style( 'packages/fontawesome/css/font-awesome.css' ) }}
	{{ HTML::style( 'bjsAssets/css/main.css' ) }}
	{{ HTML::style( 'bjsAssets/css/animate.css' ) }}
	{{ HTML::style( 'bjsAssets/css/theme-header.css' ) }}
	{{ HTML::style( 'bjsAssets/css/typicons.css' ) }}
	{{ HTML::style( 'bjsAssets/css/weathericons.css' ) }}
	{{ HTML::style( 'bjsAssets/css/media.css' ) }}
	{{ HTML::style( 'bjsAssets/css/plugins/date-picker/datepicker.css' ) }}
	{{ HTML::style( 'packages/bootstrap-select/dist/css/bootstrap-select.css' ) }}

</head>
<body @yield( 'body_style' )>

	@yield( 'navigator' )

	@yield( 'content' )

	<div class="footer">
		@yield( 'footer' )
	</div>

	@section( 'script_files' )
		{{ HTML::script( 'bjsAssets/scripts/jquery-1.10.2.js' ) }}

		{{ HTML::script( 'packages/bootstrap/dist/js/bootstrap.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/date-picker/bootstrap-datepicker.js' ) }}

		{{ HTML::script( 'bjsAssets/scripts/plugins/sparkline/jquery.sparkline.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/sparkline/sparkline-init.js' ) }}

		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.js' ) }}
		<!-- {{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.orderBars.js' ) }} -->
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.tooltip.js' ) }}
		<!-- {{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.resize.js' ) }} -->
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.selection.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.crosshair.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.stack.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.time.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/plugins/flot/jquery.flot.pie.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/charts/flot-init.js' ) }}

		<!-- angular packages -->
		{{ HTML::script( 'packages/angular/angular.js' ) }}
		{{ HTML::script( 'packages/angular-sanitize/angular-sanitize.js' ) }}
		{{ HTML::script( 'packages/angular-animate/angular-animate.js' ) }}
		{{ HTML::script( 'packages/angular-route/angular-route.js' ) }}
		{{ HTML::script( 'packages/underscore/underscore.js' ) }}
		{{ HTML::script( 'packages/moment/moment.js' ) }}
		{{ HTML::script( 'packages/moment-range/lib/moment-range.js' ) }}
		{{ HTML::script( 'packages/angular-moment/angular-moment.js' ) }}

		{{ HTML::script( 'bjsAssets/scripts/bjsas/app.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/bjsas/config.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/bjsas/controllers.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/bjsas/services.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/bjsas/filters.js' ) }}
		{{ HTML::script( 'bjsAssets/scripts/bjsas/directives.js' ) }}

		{{ HTML::script( 'packages/bootstrap-select/dist/js/bootstrap-select.js' ) }}
		<script type="text/javascript">

			$(function () {

				$(".sidebar-toggler").on("click", function() {
					return $("#sidebar").toggleClass("hide"), $(".sidebar-toggler").toggleClass("active"), !1
				});

				var n = (window.outerWidth <= 767);

				$("#sidebar-collapse").on("click", function() {
					$("#sidebar").is(":visible") || $("#sidebar").toggleClass("hide");
					$(".sidebar-collapse").toggleClass("active");

					n = (window.outerWidth <= 767);
					n && $(".open > .submenu").removeClass("open")
				});
				$(".sidebar-menu").on("click", function(t) {
					var i = $(t.target).closest("a"),
						u, r, f;
					if (i && i.length != 0) {
						if (!i.hasClass("menu-dropdown")) return n && i.get(0).parentNode.parentNode == this && (u = i.find(".menu-text").get(0), t.target != u && !$.contains(u, t.target)) ? !1 : void 0;
						if (r = i.next().get(0), !$(r).is(":visible")) {
							if (f = $(r.parentNode).closest("ul"), n && f.hasClass("sidebar-menu")) return;
							f.find("> .open > .submenu").each(function() {
								this == r || $(this.parentNode).hasClass("active") || $(this).slideUp(200).parent().removeClass("open")
							})
						}
						return n && $(r.parentNode.parentNode).hasClass("sidebar-menu") ? !1 : ($(r).slideToggle(200).parent().toggleClass("open"), !1)
					}
				});

				themeBar       = '#fb6e52';
				themeBgGraph   = '#ffffff';
				themeLineGraph = themeBgGraph;

				themeprimary     = '#ECECEC';
				themesecondary   = '#fb6e52';
				themethirdcolor  = '#ffce55';
				themefourthcolor = '#a0d468';
				themefifthcolor  = '#e75b8d';

				// InitiateSparklineCharts.init();


			});
		</script>
		@yield( 'footer_scripts' )
	@show
</body>


</html>

