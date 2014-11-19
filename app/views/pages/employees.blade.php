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
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-themesecondary">
                                            <i class="widget-icon typcn typcn-contacts themesecondary"></i>
                                            <span class="widget-caption themesecondary">List of Employees</span>
                                        </div><!--Widget Header-->
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
                                                        <li class="widget-item text-center">
                                                            <div class="row no-margin">
                                                                <div class="buttons-preview">
                                                                    <a href="" class="btn btn-palegreen shiny border-white" ng-click="template='regform.html'">Add Employee</a>
                                                                </div>
                                                                <div class="row" ng-include src="template"></div>
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
    <script type="text/ng-template" id="regform.html">
        <form class="form-group">
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 col-sm-6 col-lg-3 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">First Name</label>
                        <div class="col-sm-12 no-padding-right">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="First Name">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Last Name</label>
                        <div class="col-sm-12 no-padding-right">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="Last Name">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-2 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Gender</label>
                        <div class="col-sm-12 no-padding-right">
                            <select class="sp-employee show-tick show-menu-arrow" data-width="100%" name='employee_id'>
                                <option value="">-- select --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-2 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Birth Date</label>
                        <div class="col-sm-12 no-padding-right">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="07/12/1985">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-2 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Hired Date</label>
                        <div class="col-sm-12">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="07/12/1985">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 no-padding">
                <div class="col-xs-12 col-sm-6 col-lg-6 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Hired Date</label>
                        <div class="col-sm-12 no-padding-right">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="Cebu City, Philippines">
                                <i class="fa fa-globe"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-2 no-padding">
                    <div class="form-group">
                        <label for="inputEmail3" class="hidden-xs col-sm-12 control-label no-padding-right text-left">Salary Rate</label>
                        <div class="col-sm-12 no-padding-right">
                            <span class="input-icon icon-right">
                                <input type="text" class="form-control" placeholder="07/12/1985">
                                <i class="fa fa-money"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 no-padding">
                <div class="buttons-preview pull-right">
                    <a href="" class="btn btn-warning shiny border-white">Cancel</a>
                    <a href="" class="btn btn-palegreen shiny border-white">Save</a>
                </div>
            </div>
        </form>
    </script>
@stop
