@section( 'head_wrapper' )
    <html lang="en" ng-app="bjsApp">
@stop

@section( 'navigator' )
    @include( 'includes.navigator' )
@stop

@section('content')
    <div class="main-container container-fluid">
        <div class="page-container">
            @include( 'includes.sidebar', array('fieldActive'=>'Employees', 'subfield'=>'list') )

            <div class="page-content">
                <div class="page-breadcrumbs breadcrumbs-fixed">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Employees</li>
                    </ul>
                </div>
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Employees
                        </h1>
                    </div>
                </div>

                <div class="page-body" ng-controller="employeesController" data-ng-init="init()">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row no-margin">
                                <div class="well text-danger" ng-hide="requestResult.type==success">Sorry, I can't proceed with errors! This useful information is highly needed.</div>
                            </div>
                            <div class="row no-margin ">
                                <div class="buttons-preview pull-right">
                                    <div class="btn btn-blue shiny border-white animate bounceIn" ng-click="showContent( '/bjsAssets/partials/registration.html' )" ng-hide='template'>Add Employee</div>
                                </div>
                                <div show-template template="@{{template}}"></div>
                                <div ng-repeat="error in errors"></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="widget animated fadeInDown">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon typcn typcn-contacts themesecondary"></i>
                                            <span class="widget-caption themesecondary">List of Employees</span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-main no-padding">
                                                <div class="widget-workspace">
                                                    <ul class="widget-list">
                                                        <li class="widget-item hidden-xs hidden-sm">
                                                            <div class="row widget-list-title">
                                                                <div class="col-lg-1 col-sm-12 text-center">
                                                                    <span>Id</span>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span>Employee</span>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span class="time">Home Address</span>
                                                                </div>
                                                                <div class="col-lg-1 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span class="time">Gender</span>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="time">Birth Date</span>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-xs-12 text-center">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <i class="fa fa-calendar"></i>
                                                                    <span class="type">Hired Date</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="widget-item" ng-repeat="employee in employees">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-sm-12 text-center">
                                                                    <span>@{{employee.id}}</span>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span>@{{employee.firstname + ' ' + employee.lastname}}</span>
                                                                </div>
                                                                <div class="col-lg-3 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span>@{{employee.home_address}}</span>
                                                                </div>
                                                                <div class="col-lg-1 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span>@{{employee.gender}}</span>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-xs-12 text-center">
                                                                    <div class="divider hidden-md hidden-sm hidden-xs"></div>
                                                                    <span>@{{employee.birth_date | dateFormat }}</span>
                                                                </div>
                                                                <div class="col-lg-2 col-sm-6 col-xs-12 text-center">
                                                                    <span class="divider hidden-xs"></span>
                                                                    <span class="time">@{{employee.hired_date | dateFormat }}</span>
                                                                </div>
                                                                <div class="widget-action bg-darkorange">
                                                                    <i class="fa fa-trash" ng-hide="@{{employee.deleted_at.length}}"></i>
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
