@section( 'head_wrapper' )
    <html lang="en">
@stop

@section( 'navigator' )
    @include( 'includes.navigator')
@stop

@section('content')
    <div class="main-container container-fluid">
        <div class="page-container">
            @include( 'includes.sidebar', array('fieldActive'=>'Dashboard', 'subfield'=>'') )

            <div class="page-content">
                @include( 'includes.breadcrumbs', array('crumbs'=>'Dashboard', 'subcrumbs'=>'') )

                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-palegreen no-padding">
                                            <div class="databox-stat white bg-palegreen font-120">
                                                <i class="stat-icon fa fa-caret-down icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%" data-barcolor="#b0dc81" data-barwidth="10px" data-barspacing="5px" data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2" data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff" data-highlightspotcolor="#fff" data-highlightlinecolor="#fff" data-composite="7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8, 10">8,4,1,2,4,6,2,4,4,8,10,7,10</span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell col-xs-6 text-left">
                                                    <span class="databox-text">Sales Total</span>
                                                    <span class="databox-number">$23,657</span>
                                                </div>
                                                <div class="databox-cell col-xs-6 text-right">
                                                    <span class="databox-text">September</span>
                                                    <span class="databox-number font-70">$1,257</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-orange no-padding">
                                            <div class="databox-stat white bg-orange font-120">
                                                <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%" data-barcolor="#fb7d64" data-barwidth="10px" data-barspacing="5px" data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2" data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff" data-highlightspotcolor="#fff" data-highlightlinecolor="#fff" data-composite="7, 6, 5, 7, 9, 10, 8, 6,2,4,1,2,7">10,7,10,8,4,6, 6, 4, 7, 8 ,4,4,8</span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-left">
                                                    <span class="databox-text">Expenses Total</span>
                                                    <span class="databox-number">76,109</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-right">
                                                    <span class="databox-text">New</span>
                                                    <span class="databox-number font-70">7,540</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col=lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="databox databox-lg databox-inverted radius-bordered databox-shadowed databox-graded databox-vertical">
                                        <div class="databox-top bg-azure no-padding">
                                            <div class="databox-stat white bg-azure font-120">
                                                <i class="stat-icon fa fa-caret-up icon-xlg"></i>
                                            </div>
                                            <div class="horizontal-space space-lg"></div>
                                            <div class="databox-sparkline no-margin">
                                                <span data-sparkline="compositebar" data-height="82px" data-width="100%" data-barcolor="#3bcbef" data-barwidth="10px" data-barspacing="5px" data-fillcolor="false" data-linecolor="#fff" data-spotradius="3" data-linewidth="2" data-spotcolor="#fafafa" data-minspotcolor="#fafafa" data-maxspotcolor="#fff" data-highlightspotcolor="#fff" data-highlightlinecolor="#fff" data-composite="8,4,1,2,4,6,2,4,4,8,10,7,7">7, 6, 5, 7, 9, 10, 8, 7, 6, 6, 4, 7, 8</span>
                                            </div>
                                        </div>
                                        <div class="databox-bottom no-padding">
                                            <div class="databox-row">
                                                <div class="databox-cell cell-6 text-left">
                                                    <span class="databox-text">Visits Total</span>
                                                    <span class="databox-number">990,541</span>
                                                </div>
                                                <div class="databox-cell cell-6 text-right">
                                                    <span class="databox-text">September</span>
                                                    <span class="databox-number font-70">292,123</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
