@section( 'head_wrapper' )
    <html lang="en">
@stop

@section( 'navigator' )
    @include( 'includes.navigator' )
@stop

@section('content')
    <div class="main-container container-fluid">
        <div class="page-container">
            @include( 'includes.sidebar' )

            <div class="page-content">
                <div class="page-breadcrumbs breadcrumbs-fixed">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Dashboard
                        </h1>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon fa fa-users themesecondary"></i>
                                            <span class="widget-caption themesecondary">List of Employees</span>
                                        </div><!--Widget Header-->
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="widget-workspace">
                                                    <ul class="widget-list">
                                                        <li class="widget-item">
                                                            <div class="row">
                                                                <div class=" col-lg-6 col-sm-12">
                                                                    <img src="bjsAssets/images/xanderdwyl.jpeg" class="user-avatar">
                                                                    <span class="user-name">Adam Johnson</span>
                                                                    <span class="user-at">at</span>
                                                                    <span class="user-company">Microsoft</span>
                                                                </div>
                                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="time">1 Hours Ago</span>
                                                                </div>
                                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="type">Issue</span>
                                                                </div>
                                                                <div class="ticket-state bg-palegreen">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-item">
                                                            <div class="row">
                                                                <div class=" col-lg-6 col-sm-12">
                                                                    <img src="bjsAssets/images/xanderdwyl.jpeg" class="user-avatar">
                                                                    <span class="user-name">Divyia Phillips</span>
                                                                    <span class="user-at">at</span>
                                                                    <span class="user-company">Dribbble</span>
                                                                </div>
                                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="time">3 Hours Ago</span>
                                                                </div>
                                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="type">Payment</span>
                                                                </div>
                                                                <div class="ticket-state bg-palegreen">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-item">
                                                            <div class="row">
                                                                <div class=" col-lg-6 col-sm-12">
                                                                    <img src="bjsAssets/images/xanderdwyl.jpeg" class="user-avatar">
                                                                    <span class="user-name">Nicolai Larson</span>
                                                                    <span class="user-at">at</span>
                                                                    <span class="user-company">Google</span>
                                                                </div>
                                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="time">18 Hours Ago</span>
                                                                </div>
                                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="type">Issue</span>
                                                                </div>
                                                                <div class="ticket-state bg-darkorange">
                                                                    <i class="fa fa-times"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-item">
                                                            <div class="row">
                                                                <div class=" col-lg-6 col-sm-12">
                                                                    <img src="bjsAssets/images/xanderdwyl.jpeg" class="user-avatar">
                                                                    <span class="user-name">Bill Jackson</span>
                                                                    <span class="user-at">at</span>
                                                                    <span class="user-company">Mabna</span>
                                                                </div>
                                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="time">2 days Ago</span>
                                                                </div>
                                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="type">Payment</span>
                                                                </div>
                                                                <div class="ticket-state bg-palegreen">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-item">
                                                            <div class="row">
                                                                <div class=" col-lg-6 col-sm-12">
                                                                    <img src="bjsAssets/images/xanderdwyl.jpeg" class="user-avatar">
                                                                    <span class="user-name">Eric Clapton</span>
                                                                    <span class="user-at">at</span>
                                                                    <span class="user-company">Musicker</span>
                                                                </div>
                                                                <div class="ticket-time  col-lg-4 col-sm-6 col-xs-12">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-clock-o"></i>
                                                                    <span class="time">2 days Ago</span>
                                                                </div>
                                                                <div class="ticket-type  col-lg-2 col-sm-6 col-xs-12">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="type">Info</span>
                                                                </div>
                                                                <div class="ticket-state bg-yellow">
                                                                    <i class="fa fa-info"></i>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
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
